<?php
namespace Modules\Courses\src\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Modules\Courses\src\Repositories\CoursesRepositoryInterface;
use Modules\Lessons\src\Repositories\LessonsRepositoryInterface;


class CourseController extends Controller
{
    protected $courseRepository;
    protected $lessonRepository;
    public function __construct(
        CoursesRepositoryInterface $courseRepository,
        LessonsRepositoryInterface $lessonRepository
    ) {
        $this->courseRepository = $courseRepository;
        $this->lessonRepository = $lessonRepository;
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

    public function getTrial(string $id) {
        $lesson = $this->lessonRepository->find($id);
        if(!$lesson){
            return ['success' => false,'message' => 'Không tìm thấy khóa học'];
        }
        return ['success' => true,'lesson' => $lesson];
    }
}

?>
