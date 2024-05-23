<?php

namespace Modules\Courses\src\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Courses\src\Http\Requests\CourseStoreRequest;
use Carbon\Carbon;
use Modules\Categories\src\Repositories\CategoriesRepositoryInterface;
use Modules\Courses\src\Repositories\CoursesRepositoryInterface;

use Yajra\DataTables\Facades\DataTables;

class CourseController extends Controller
{
    protected $courseRepository;
    protected $categoryRepository;

    public function __construct(
        CoursesRepositoryInterface $courseRepository,
        CategoriesRepositoryInterface $categoryRepository,
    ) {
        $this->courseRepository = $courseRepository;
        $this->categoryRepository = $categoryRepository;
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
        return view('courses::create', compact(
            'titlePage',
            'categories',
        ));
    }

    public function data()
    {
        $listCourse = $this->courseRepository->getAllLatest(['id', 'name', 'price', 'sale_price', 'status', 'created_at']);
        return DataTables::of($listCourse)
            ->addColumn('edit', function ($course) {
                return '<a href="' . route('admin.courses.edit', $course->id) . '" class="btn btn-warning">Sửa</a>';
            })
            ->addColumn('delete', function ($course) {
                return '<a href="' . route('admin.courses.destroy', $course->id) . '" class="btn btn-danger delete-btn">Xóa</a>';
            })
            ->addColumn('status', function ($course) {
                return $course->status == 1 ? '<button class="btn btn-success">Đã ra mắt</button>' : '<button class="btn btn-warning">Chưa ra mắt</button>';
            })
            ->editColumn('created_at', function ($course) {
                return Carbon::parse($course->created_at)->format('d/m/Y H:i:s');
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
            ->rawColumns(['edit', 'delete', 'status'])
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
        $course = $this->courseRepository->find($id);
        $categories = $this->categoryRepository->getAll(['id','name','parent_id']);
        $categoryIds = $this->courseRepository->getCategoriesIds($course);

        if ($course) {
            return view('courses::edit', compact(
                'titlePage',
                'course',
                'categories',
                'categoryIds'
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
        $this->courseRepository->update($id, $data);
        $course = $this->courseRepository->find($id);
        $this->courseRepository->updateCourseCategories($course, $request->categories);

        return redirect()->back()->with('success', __('courses::message.update.success'));
    }

    public function destroy(string $id)
    {
        $course = $this->courseRepository->find($id);
        $this->courseRepository->deleteCourseCategories($course);
        $status = $this->courseRepository->delete($id);
        return response(['message' =>  __('courses::message.delete.success'), 500]);
    }
}
