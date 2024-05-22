<?php

namespace Modules\Courses\src\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
// use Modules\User\Requests\UserStoreRequest;
use Modules\Courses\src\Repositories\CoursesRepositoryInterface;

use Yajra\DataTables\Facades\DataTables;

class CourseController extends Controller
{
    protected $courseRepository;

    public function __construct(CoursesRepositoryInterface $courseRepository)
    {
        $this->courseRepository = $courseRepository;
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
        return view('courses::create', compact(
            'titlePage'
        ));
    }

    public function data()
    {
        $listCourse = $this->courseRepository->getAllLatest(['id', 'name', 'price', 'status', 'created_at']);
        return DataTables::of($listCourse)
            ->addColumn('edit', function ($course) {
                return '<a href="' . route('admin.courses.edit', $course->id) . '" class="btn btn-warning">Sửa</a>';
            })
            ->addColumn('delete', function ($course) {
                return '<a href="' . route('admin.courses.destroy', $course->id) . '" class="btn btn-danger delete-btn">Xóa</a>';
            })
            ->editColumn('created_at', function ($course) {
                return Carbon::parse($course->created_at)->format('d/m/Y H:i:s');
            })
            ->rawColumns(['edit', 'delete'])
            ->toJson();
    }

    // public function store(courseStoreRequest $request)
    // {
    //     $status = $this->courseRepository->create(
    //         [
    //             'name' => $request->name,
    //             'email' => $request->email,
    //             'group_id' => $request->group_id,
    //             'password' => $request->password,
    //         ]
    //     );
    //     return to_route('admin.courses.index')->with('success', __('course::message.create.success'));
    // }

    public function edit(string $id)
    {
        $titlePage = 'Cập nhật Người dùng';;
        $course = $this->courseRepository->find($id);

        if ($course) {
            return view('course::edit', compact(
                'titlePage',
                'course'
            ));
        } else {
            abort(404);
        }
    }

    // public function update(courseStoreRequest $request, string $id)
    // {
    //     $data = $request->except(['_token', 'password', '_method']);
    //     if ($request->password) {
    //         $data['password'] = bcrypt($request->password);
    //     }
    //     $status = $this->courseRepository->update($id, $data);

    //     return to_route('admin.courses.index')->with('success', __('course::message.update.success'));
    // }

    public function destroy(string $id)
    {
        $status = $this->courseRepository->delete($id);
        return response(['message' =>  __('course::message.delete.success'), 500]);
    }
}
