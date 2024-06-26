<?php

namespace Modules\Courses\src\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Courses\src\Http\Requests\CourseStoreRequest;
use Carbon\Carbon;
use Modules\Categories\src\Repositories\CategoriesRepositoryInterface;
use Modules\Courses\src\Repositories\CoursesRepositoryInterface;
use Modules\Teacher\src\Repositories\TeacherRepositoryInterface;
use Yajra\DataTables\Facades\DataTables;

class CourseController extends Controller
{
    protected $courseRepository;
    protected $categoryRepository;
    protected $teacherRepository;

    public function __construct(
        CoursesRepositoryInterface $courseRepository,
        CategoriesRepositoryInterface $categoryRepository,
        TeacherRepositoryInterface $teacherRepository,
    ) {
        $this->courseRepository = $courseRepository;
        $this->categoryRepository = $categoryRepository;
        $this->teacherRepository = $teacherRepository;
    }

    public function index()
    {
        $titlePage = "Danh sách khóa học";
        return view('courses::index', compact(
            'titlePage'
        ));
    }

    public function create()
    {
        $titlePage = "Thêm khóa học";
        $categories = $this->categoryRepository->getAll(['id','name', 'parent_id']);
        $teachers = $this->teacherRepository->getAll();['id','name'];
        return view('courses::create', compact(
            'titlePage',
            'categories',
            'teachers'
        ));
    }

    public function data()
    {
        $listCourse = $this->courseRepository->getAllCourses();
        return DataTables::of($listCourse)
            ->addColumn('edit', function ($course) {
                return '<a href="' . route('admin.courses.edit', $course->id) . '" class="btn btn-warning btn-sm">Sửa</a>';
            })
            ->addColumn('delete', function ($course) {
                return '<a href="' . route('admin.courses.destroy', $course->id) . '" class="btn btn-danger btn-sm delete-btn">Xóa</a>';
            })
            ->addColumn('status', function ($course) {
                return $course->status == 1 ? '<div class="badge bg-success">Đã ra mắt</div>' : '<div class="badge bg-warning">Chưa ra mắt</div>';
            })
            ->editColumn('created_at', function ($course) {
                return Carbon::parse($course->created_at)->format('d/m/Y H:i:s');
            })
            ->addColumn('lessons', function ($course) {
                return '<a href="' . route('admin.lessons.index', $course->id) . '" class="btn btn-primary btn-sm">Xem</a>';
            })
            ->editColumn('price', function ($course) {
                if ($course->price) {
                    if ($course->sale_price) {
                        $price = number_format($course->sale_price) . 'đ';
                    } else {
                        $price = number_format($course->price) . 'đ';
                    }
                } else {
                    $price = 'Miễn phí';
                };
                return $price;
            })
            ->rawColumns(['edit', 'delete', 'status','lessons'])
            ->toJson();
    }

    public function store(CourseStoreRequest $request)
    {
        $data = $request->except(['_token', 'categories']);
        if (!$data['price']) {
            $data['price'] = 0;
        }

        if (!$data['sale_price']) {
            $data['sale_price'] = 0;
        }
        $course = $this->courseRepository->create($data);

        $categories = [];
        foreach ($request->categories as $category) {
            $categories[$category] = [
                'created_at' => Carbon::now()->format('Y-m-d H:m:i'),
                'updated_at' => Carbon::now()->format('Y-m-d H:m:i'),
            ];
        }

        $courseCategories = $this->courseRepository->createCourseCategories($course, $request->categories);


        return to_route('admin.courses.index')->with('success', __('courses::message.create.success'));
    }

    public function edit(string $id)
    {
        $titlePage = 'Cập nhật Khóa học';
        $course = $this->courseRepository->getCourse($id);
        $categories = $this->categoryRepository->getAll(['id','name','parent_id']);
        $categoryIds = $this->courseRepository->getCategoriesIds($course);
        $teachers = $this->teacherRepository->getAll();

        if ($course) {
            return view('courses::edit', compact(
                'titlePage',
                'course',
                'categories',
                'categoryIds',
                'teachers'
            ));
        } else {
            abort(404);
        }
    }

    public function update(courseStoreRequest $request, string $id)
    {
        $data = $request->except(['_token','_method', 'categories']);
        if (!$data['price']) {
            $data['price'] = 0;
        }

        if (!$data['sale_price']) {
            $data['sale_price'] = 0;
        }
        $this->courseRepository->updateCourse($id, $data);
        $course = $this->courseRepository->getCourse($id);
        $this->courseRepository->updateCourseCategories($course, $request->categories);

        return redirect()->back()->with('success', __('courses::message.update.success'));
    }

    public function destroy(string $id)
    {
        $course = $this->courseRepository->getCourse($id);
        $status = $this->courseRepository->deleteCourse($id);

        if($status){
            deleteFileStorage($course->thumbnail);
        }
        return response(['message' =>  __('courses::message.delete.success'), 500]);
    }
}
