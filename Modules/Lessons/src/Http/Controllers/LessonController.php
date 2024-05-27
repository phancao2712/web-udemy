<?php

namespace Modules\Lessons\src\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Courses\src\Repositories\CoursesRepositoryInterface;
use Modules\Document\src\Repositories\DocumentRepositoryInterface;
use Modules\Lessons\src\Http\Requests\LessonRequest;
use Modules\Lessons\src\Repositories\LessonsRepositoryInterface;
use Modules\Video\src\Repositories\VideoRepositoryInterface;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use File;

class LessonController extends Controller
{
    protected $coursesRepository;
    protected $videoRepository;
    protected $documentRepository;
    protected $lessonRepository;

    public function __construct(
        CoursesRepositoryInterface $courseRepository,
        VideoRepositoryInterface $videoRepository,
        DocumentRepositoryInterface $documentRepository,
        LessonsRepositoryInterface $lessonRepository,
    ) {
        $this->courseRepository = $courseRepository;
        $this->videoRepository = $videoRepository;
        $this->documentRepository = $documentRepository;
        $this->lessonRepository = $lessonRepository;
    }

    public function index(string $id)
    {
        $course = $this->courseRepository->find($id);
        $titlePage = "Bài Học: " . $course->name;
        return view(
            'lessons::index',
            compact(
                'course',
                'titlePage',
                'id'
            )
        );
    }

    public function create(string $id)
    {
        $titlePage = "Thêm bài giảng";
        $position = $this->lessonRepository->getPosition($id);
        $lessons = $this->lessonRepository->getAll();
        return view(
            'lessons::create',
            compact(
                'titlePage',
                'id',
                'position',
                'lessons'
            )
        );
    }

    public function store(LessonRequest $request, string $id)
    {
        $name = $request->name;
        $slug = $request->slug;
        $parent_id = $request->parent_id == 0 ? null : $request->parent_id;
        $is_trial = $request->is_trial;
        $position = $request->position;
        $video_id = null;
        $document_id = null;
        $duration = 0;
        $description = $request->description;
        $video = $request->video;
        $document = $request->document;

        if ($document) {
            $infoDocument = getInfoFile($document);
            $document = $this->documentRepository->createDocument([
                'name' => $infoDocument['name'],
                'size' => $infoDocument['size'],
                'url' => $document,
            ], $document);
            $document_id = $document->id;
        }

        if ($video) {
            $infoVideo = getInfoVideo($video);
            $video = $this->videoRepository->createVideo([
                'url' => $video,
                'name' => $infoVideo['filename'],
                'size' => $infoVideo['playtime_seconds'],
            ], $video);
            $video_id = $video->id;
            $duration = $infoVideo['playtime_seconds'];
        }

        $this->lessonRepository->create([
            'name' => $name,
            'slug' => $slug,
            'video_id' => $video_id,
            'document_id' => $document_id,
            'parent_id' => $parent_id,
            'is_trial' => $is_trial,
            'position' => $position,
            'description' => $description,
            'course_id' => $id,
            'duration' => $duration
        ]);

        return to_route('admin.lessons.index', $id)->with('success', __('lessons::message.create.success'));
    }

    public function data(string $id)
    {
        $lessons = $this->lessonRepository->getLessons($id);

        $lessons = DataTables::of($lessons)->toArray();
        $lessons['data'] = $this->getDataTable($lessons['data']);
        return $lessons;
    }

    public function getDataTable($lessons, $char = '', &$result = [])
    {
        if ($lessons) {
            foreach ($lessons as $key => $lesson) {
                $row = $lesson;

                $row['name'] = $char . $row['name'];
                if ($row['parent_id'] == null) {
                    $row['is_trial'] = '';
                    $row['duration'] = '';
                    $row['edit'] = '<a href="" class="btn btn-warning">Sửa</a>';
                    $row['delete'] = '<a href="" class="btn btn-danger delete-btn">Xóa</a>';
                    $row['created_at'] = Carbon::parse($lesson['created_at'])->format('d/m/Y H:i:s');
                } else {
                    $row['is_trial'] = $lesson['is_trial'] ? 'Có' : 'Không';
                    $row['duration'] = $lesson['duration'] . ' giây';
                    $row['edit'] = '<a href="" class="btn btn-warning">Sửa</a>';
                    $row['delete'] = '<a href="" class="btn btn-danger delete-btn">Xóa</a>';
                    $row['created_at'] = Carbon::parse($lesson['created_at'])->format('d/m/Y H:i:s');
                }
                unset($row['sub_lessons']);
                unset($row['updated_at']);
                unset($row['course_id']);
                $result[] = $row;

                if (!empty($lesson['sub_lessons'])) {
                     $this->getDataTable($lesson['sub_lessons'], $char . '|-- ', $result);
                }
            }
        }

        return $result;
    }
}
