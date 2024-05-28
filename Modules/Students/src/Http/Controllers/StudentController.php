<?php

namespace Modules\Students\src\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Modules\Students\src\Http\Requests\StudentRequest;
use Modules\Students\src\Repositories\StudentsRepositoryInterface;
use Yajra\DataTables\Facades\DataTables;

class StudentController extends Controller
{

    protected $studentRepository;

    public function __construct(StudentsRepositoryInterface $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function index()
    {
        $titlePage = "Danh sách học viên";
        return view('students::index', compact(
            'titlePage'
        ));
    }

    public function create()
    {
        $titlePage = "Thêm học viên";
        return view('students::create', compact(
            'titlePage'
        ));
    }

    public function data()
    {
        $listStudent = $this->studentRepository->getAllLatest(['id', 'name', 'email', 'status', 'created_at']);
        return DataTables::of($listStudent)
            ->addColumn('edit', function ($student) {
                return '<a href="' . route('admin.students.edit', $student->id) . '" class="btn btn-sm btn-warning">Sửa</a>';
            })
            ->addColumn('delete', function ($student) {
                return '<a href="' . route('admin.students.destroy', $student->id) . '" class="btn btn-sm btn-danger delete-btn">Xóa</a>';
            })
            ->editColumn('created_at', function ($student) {
                return Carbon::parse($student->created_at)->format('d/m/Y H:i:s');
            })
            ->editColumn('status', function ($student) {
                return $student->status == 1 ? '<span class="badge bg-success">Kích hoạt</span>' : '<span class="badge bg-danger">Chưa kích hoạt</span>';
            })
            ->rawColumns(['edit', 'delete', 'status'])
            ->toJson();
    }

    public function store(StudentRequest $request)
    {
        $status = $this->studentRepository->create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'status' => $request->status,
                'address' => $request->address,
                'phone' => $request->phone,
            ]
        );
        return to_route('admin.students.index')->with('success', __('students::message.create.success'));
    }

    public function edit(string $id)
    {
        $titlePage = 'Cập nhật học viên';
        $student = $this->studentRepository->find($id);

        if ($student) {
            return view('students::edit', compact(
                'titlePage',
                'student'
            ));
        } else {
            abort(404);
        }
    }

    public function update(StudentRequest $request, string $id)
    {
        $data = $request->except(['_token', 'password', '_method']);
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }
        $status = $this->studentRepository->update($id, $data);

        return to_route('admin.students.index')->with('success', __('students::message.update.success'));
    }

    public function destroy(string $id)
    {
        $status = $this->studentRepository->delete($id);
        return response(['message' =>  __('students::message.delete.success'), 500]);
    }
}
