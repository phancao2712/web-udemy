<?php

namespace Modules\Lessons\src\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Courses\src\Repositories\CoursesRepositoryInterface;
use Modules\Lessons\src\Http\Requests\LessonRequest;
use Modules\Video\src\Repositories\VideoRepositoryInterface;

class LessonController extends Controller
{
    protected $coursesRepository;
    protected $videoRepository;

    public function __construct(
        CoursesRepositoryInterface $courseRepository,
        VideoRepositoryInterface $videoRepository,
    ) {
        $this->courseRepository = $courseRepository;
        $this->videoRepository = $videoRepository;
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
        $this->videoRepository->createVideo(['url' => $video]);
    }
}
