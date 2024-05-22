<?php

namespace Modules\User\src\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Modules\User\src\Http\Requests\UserStoreRequest;
use Modules\User\src\Repositories\UserRepositoryInterface;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $titlePage = "Danh sách người dùng";
        return view('user::index', compact(
            'titlePage'
        ));
    }

    public function create()
    {
        $titlePage = "Thêm người dùng";
        return view('user::create', compact(
            'titlePage'
        ));
    }

    public function data()
    {
        $listUser = $this->userRepository->getAllLatest(['id', 'name', 'email', 'group_id', 'created_at']);
        return DataTables::of($listUser)
            ->addColumn('edit', function ($user) {
                return '<a href="' . route('admin.users.edit', $user->id) . '" class="btn btn-warning">Sửa</a>';
            })
            ->addColumn('delete', function ($user) {
                return '<a href="' . route('admin.users.destroy', $user->id) . '" class="btn btn-danger delete-btn">Xóa</a>';
            })
            ->editColumn('created_at', function ($user) {
                return Carbon::parse($user->created_at)->format('d/m/Y H:i:s');
            })
            ->rawColumns(['edit', 'delete'])
            ->toJson();
    }

    public function store(UserStoreRequest $request)
    {
        $status = $this->userRepository->create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'group_id' => $request->group_id,
                'password' => $request->password,
            ]
        );
        return to_route('admin.users.index')->with('success', __('user::message.create.success'));
    }

    public function edit(string $id)
    {
        $titlePage = 'Cập nhật Người dùng';;
        $user = $this->userRepository->find($id);

        if ($user) {
            return view('user::edit', compact(
                'titlePage',
                'user'
            ));
        } else {
            abort(404);
        }
    }

    public function update(UserStoreRequest $request, string $id)
    {
        $data = $request->except(['_token', 'password', '_method']);
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }
        $status = $this->userRepository->update($id, $data);

        return to_route('admin.users.index')->with('success', __('user::message.update.success'));
    }

    public function destroy(string $id)
    {
        $status = $this->userRepository->delete($id);
        return response(['message' =>  __('user::message.delete.success'), 500]);
    }
}
