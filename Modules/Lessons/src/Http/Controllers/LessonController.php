<?php

namespace Modules\Lessons\src\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Courses\src\Repositories\CoursesRepositoryInterface;
use Modules\Document\src\Repositories\DocumentRepositoryInterface;
use Modules\Lessons\src\Http\Requests\LessonRequest;
use Modules\Video\src\Repositories\VideoRepositoryInterface;
use File;

class LessonController extends Controller
{
    protected $coursesRepository;
    protected $videoRepository;
    protected $documentRepository;

    public function __construct(
        CoursesRepositoryInterface $courseRepository,
        VideoRepositoryInterface $videoRepository,
        DocumentRepositoryInterface $documentRepository,
    ) {
        $this->courseRepository = $courseRepository;
        $this->videoRepository = $videoRepository;
        $this->documentRepository = $documentRepository;
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

    public function store(LessonRequest $request){
        $video = $request->video;
        $document = $request->document;
        $infoVideo = getInfoVideo($video);
        $infoDocument = getInfoFile($document);

         $result= $this->videoRepository->createVideo([
            'url' => $video,
            'name' => $infoVideo['filename'],
            'size' => $infoVideo['playtime_seconds'],
        ], $video);

        $this->documentRepository->createDocument([
            'name' => $infoDocument['name'],
            'size' => $infoDocument['size'],
            'url' => $document,
        ], $document);
        return 132;
    }
}
