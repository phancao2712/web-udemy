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
        CoursesRepositoryInterface $coursesRepository,
        VideoRepositoryInterface $videoRepository,
        DocumentRepositoryInterface $documentRepository,
        LessonsRepositoryInterface $lessonRepository,
    ) {
        $this->coursesRepository = $coursesRepository;
        $this->videoRepository = $videoRepository;
        $this->documentRepository = $documentRepository;
        $this->lessonRepository = $lessonRepository;
    }

    public function index(string $id)
    {
        $course = $this->coursesRepository->getCourse($id);
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
        $status = $request->status ?? 0;

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
            'duration' => $duration,
            'status' => $status
        ]);

        $this->updateDuration($id);

        return to_route('admin.lessons.index', $id)->with('success', __('lessons::message.create.success'));
    }

    public function data(string $id)
    {
        $lessons = $this->lessonRepository->getLessons($id, ['id', 'view', 'name', 'parent_id', 'is_trial', 'duration', 'course_id'])->get();

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
                $row['edit'] = '<a href="' . route('admin.lessons.edit', $row['id']) . '" class="btn btn-warning btn-sm">Sửa</a>';
                $row['delete'] = '<a href="' . route('admin.lessons.destroy', $row['id']) . '" class="btn btn-danger delete-btn btn-sm">Xóa</a>';
                if ($row['parent_id'] == null) {
                    $row['is_trial'] = '';
                    $row['duration'] = '';
                    $row['add'] = '<a href="' . route('admin.lessons.create', $row['course_id']) . '?module=' . $row['id'] . '" class="btn btn-primary btn-sm">Thêm</a>';
                } else {
                    $row['is_trial'] = $lesson['is_trial'] ? 'Có' : 'Không';
                    $row['duration'] = getTime($lesson['duration']) . ' giây';
                    $row['add'] = '';
                }
                unset($row['sub_lessons']);
                unset($row['created_at']);
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

    public function edit(string $lessonId)
    {
        $titlePage = "Sửa bài giảng";
        $lesson = $this->lessonRepository->find($lessonId);

        if (!$lesson) {
            abort(404);
        }

        $lessons = $this->lessonRepository->getAll();
        $video = $lesson->video?->url;
        $document = $lesson->document?->url;
        return view(
            'lessons::edit',
            compact(
                'titlePage',
                'lessons',
                'lesson',
                'video',
                'document'
            )
        );
    }

    public function update(LessonRequest $request, string $lessonId)
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
        $status = $request->status ?? 0;

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

        $lesson = $this->lessonRepository->update($lessonId, [
            'name' => $name,
            'slug' => $slug,
            'video_id' => $video_id,
            'document_id' => $document_id,
            'parent_id' => $parent_id,
            'is_trial' => $is_trial,
            'position' => $position,
            'description' => $description,
            'duration' => $duration,
            'status' => $status
        ]);

        $lesson = $this->lessonRepository->find($lessonId);
        $this->updateDuration($lesson->course_id);

        return to_route('admin.lessons.edit', $lessonId)->with('success', __('lessons::message.update.success'));
    }

    public function destroy(string $id)
    {
        $lesson = $this->lessonRepository->find($id);
        $this->lessonRepository->delete($id);
        $this->updateDuration($lesson->course_id);
        return response(['message' => __('lessons::message.delete.success'), 500]);
    }

    public function sort(string $id)
    {
        $modules = $this->lessonRepository->getLessons($id, ['id', 'name', 'position', 'parent_id'])->with('children')->get();
        $titlePage = "Sắp xếp bài giảng";

        return view('lessons::sort', compact('id', 'titlePage', 'modules'));
    }

    public function handleSort(Request $request, string $id)
    {
        $lessons = $request->lesson;

        foreach ($lessons as $index => $lesson) {
            $this->lessonRepository->update($lesson, [
                'position' => $index
            ]);
        }
        return redirect()->back()->with('success', __('lessons::message.update.success'));
    }

    private function updateDuration($courseId)
    {
        $lesson = $this->lessonRepository->getAllLesson($courseId);

        $duration = $lesson->reduce(function ($carry, $item) {
            return $carry + $item->duration;
        });

        $course = $this->coursesRepository->updateCourse($courseId, [
            'durations' => $duration
        ]);
    }
}
