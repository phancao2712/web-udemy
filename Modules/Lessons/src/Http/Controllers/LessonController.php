<?php

namespace Modules\Lessons\src\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Courses\src\Repositories\CoursesRepositoryInterface;
use Modules\Document\src\Repositories\DocumentRepositoryInterface;
use Modules\Lessons\src\Http\Requests\LessonRequest;
use Modules\Lessons\src\Repositories\LessonsRepositoryInterface;
use Modules\Video\src\Repositories\VideoRepositoryInterface;
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
        $titlePage = "Bài Học: ". $course->name;
        return view('lessons::index', compact(
            'course',
            'titlePage'
        )
        );
    }

    public function create(string $id) {

        $titlePage = "Thêm bài giảng";

        return view('lessons::create', compact(
            'titlePage',
            'id'
        ));
    }

    public function store(LessonRequest $request, string $id){
        $name = $request->name;
        $slug = $request->slug;
        $parent_id = $request->parent_id == 0 ? null : $request->parent_id;
        $is_trial = $request->is_trial;
        $position = $request->position;
        $video_id = null;
        $document_id = null;
        $description = $request->description;
        $video = $request->video;
        $document = $request->document;

        if($document){
            $infoDocument = getInfoFile($document);
            $document = $this->documentRepository->createDocument([
                'name' => $infoDocument['name'],
                'size' => $infoDocument['size'],
                'url' => $document,
            ], $document);
            $document_id = $document->id;
        }

        $infoVideo = getInfoVideo($video);
        $video = $this->videoRepository->createVideo([
            'url' => $video,
            'name' => $infoVideo['filename'],
            'size' => $infoVideo['playtime_seconds'],
        ], $video);
        $video_id = $video->id;

        $this->lessonRepository->create([
            'name' => $name,
            'slug' => $slug,
            'video_id' => $video_id,
            'document_id' => $document_id,
            'parent_id' => $parent_id,
            'is_trial' => $is_trial,
            'position' => $position,
            'description' => $description,
            'duration' => $infoVideo['playtime_seconds']
        ]);

        return to_route('admin.lessons.index', $id)->with('success', __('lessons::message.create.success'));
    }
}
