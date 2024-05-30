<?php
namespace Modules\Courses\src\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Modules\Courses\src\Repositories\CoursesRepositoryInterface;


class CourseController extends Controller
{
    protected $courseRepository;
    public function __construct(
        CoursesRepositoryInterface $courseRepository
    ) {
        $this->courseRepository = $courseRepository;
    }

    public function index()
    {
        $titlePage = 'Danh sách khóa học';
        $courses = $this->courseRepository->paginator(['*'], 10);

        return view("courses::clients.index", compact('titlePage', 'courses'));
    }

    public function detail(string $slug) {
        $course = $this->courseRepository->getCourseDetail($slug);

        if (!$course) {
            abort(404);
        }

        $titlePage = $course->name;

        return view('courses::clients.detail', compact(
            'titlePage',
            'course'
        ));
    }
}

?>
