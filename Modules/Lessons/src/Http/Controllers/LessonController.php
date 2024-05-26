<?php

namespace Modules\Lessons\src\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Courses\src\Repositories\CoursesRepositoryInterface;
use Modules\Lessons\src\Http\Requests\LessonRequest;

class LessonController extends Controller
{
    protected $coursesRepository;

    public function __construct(
        CoursesRepositoryInterface $courseRepository,
    ) {
        $this->courseRepository = $courseRepository;
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
        dd($request->all());
    }
}
