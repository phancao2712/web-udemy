<?php

namespace Modules\Teacher\src\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Modules\Teacher\src\Http\Requests\TeacherStoreRequest;
use Modules\Teacher\src\Repositories\TeacherRepositoryInterface;
use Yajra\DataTables\Facades\DataTables;

class TeacherController extends Controller
{
    protected $teacherRepository;

    public function __construct(TeacherRepositoryInterface $teacherRepository)
    {
        $this->teacherRepository = $teacherRepository;
    }

    public function index()
    {
        $titlePage = "Danh sách giảng viên";
        return view('teacher::index', compact(
            'titlePage'
        ));
    }

    public function create()
    {
        $titlePage = "Thêm giảng viên";
        return view('teacher::create', compact(
            'titlePage'
        ));
    }

    public function data()
    {
        $listTeacher = $this->teacherRepository->getAllLatest(['id', 'name', 'exp', 'image', 'created_at']);
        return DataTables::of($listTeacher)
            ->addColumn('edit', function ($teacher) {
                return '<a href="' . route('admin.teachers.edit', $teacher->id) . '" class="btn btn-warning">Sửa</a>';
            })
            ->addColumn('delete', function ($teacher) {
                return '<a href="' . route('admin.teachers.destroy', $teacher->id) . '" class="btn btn-danger delete-btn">Xóa</a>';
            })
            ->editColumn('created_at', function ($teacher) {
                return Carbon::parse($teacher->created_at)->format('d/m/Y H:i:s');
            })
            ->editColumn('image', function ($teacher) {
                return '<image style="width:70px; height: 70px; object-fit:cover;" src="'.$teacher->image.'"/>';
            })
            ->editColumn('exp', function ($teacher) {
                return $teacher->exp.' năm';
            })
            ->rawColumns(['edit', 'delete', 'image'])
            ->toJson();
    }

    public function store(TeacherStoreRequest $request)
    {
        $data = $request->except(['_token']);
        $status = $this->teacherRepository->create($data);
        return to_route('admin.teachers.index')->with('success', __('teacher::message.create.success'));
    }

    public function edit(string $id)
    {
        $titlePage = 'Cập nhật Giảng Viên';
        $teacher = $this->teacherRepository->find($id);

        if ($teacher) {
            return view('teacher::edit', compact(
                'titlePage',
                'teacher'
            ));
        } else {
            abort(404);
        }
    }

    public function update(teacherStoreRequest $request, string $id)
    {
        $data = $request->except(['_token', '_method']);

        $status = $this->teacherRepository->update($id, $data);

        return to_route('admin.teachers.index')->with('success', __('teacher::message.update.success'));
    }

    public function destroy(string $id)
    {
        $teacher = $this->teacherRepository->find($id);
        $status = $this->teacherRepository->delete($id);

        if($status){
           $image = $teacher->image;
           deleteFileStorage($image);
        }
        return response(['message' =>  __('teacher::message.delete.success'), 500]);
    }
}
