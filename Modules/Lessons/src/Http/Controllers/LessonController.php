<?php

namespace Modules\Lessons\src\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        // $video = $request->video;
        // $this->videoRepository->createVideo(['url' => $video]);

        $path = Storage::disk('public')->path(str_replace('storage','',$request->document));
        $size = File::size($path);

        $name = basename($path);
        $result = $this->documentRepository->createDocument([
            'name' => $name,
            'size' => $size,
            'url' => $request->document,
        ]);

        dd($result);
    }
}
