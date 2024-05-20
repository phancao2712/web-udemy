<?php

namespace Modules\User\src\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Modules\User\Requests\UserStoreRequest;
use Modules\User\src\Repositories\UserRepositoryInterface;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index(){
        $titlePage = "Danh sách người dùng";
        return view('user::index', compact(
            'titlePage'
        ));
    }

    public function create(){
        $titlePage = "Thêm người dùng";
        return view('user::create', compact(
            'titlePage'
        ));
    }

    public function data(){
        $listUser = $this->userRepository->getAll(['name', 'email','group_id', 'created_at']);
        return DataTables::of($listUser)
        ->addColumn('edit', function($user) {
            return '<a href="#" class="btn btn-warning">Sửa</a>';
        })
        ->addColumn('delete', function($user) {
            return '<a href="#" class="btn btn-danger">Xóa</a>';
        })
        ->editColumn('created_at', function ($user) {
            return Carbon::parse($user->created_at)->format('d/m/Y H:i:s');
        })
        ->rawColumns(['edit', 'delete'])
        ->toJson();
        ;
        // $users = [];

        // foreach ($listUser as $user) {
        //     array_push($users, [
        //         ...$user->toArray(),
        //         'edit' => '<a class="btn btn-warning" href="">Sửa</a>',
        //         'delete' => '<a class="btn btn-danger" href="">Xóa</a>',
        //     ]);
        // }

        // return response()->json([
        //     "draw" => 1,
        //     "recordsTotal" => count($listUser),
        //     "recordsFiltered" => count($listUser),
        //     "data" => $users
        // ]);
    }

    public function store(UserStoreRequest $request) {
        $this->userRepository->create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'group_id' => $request->group_id,
                'password' => $request->password,
            ]
        );
        return to_route('admin.users.index')->with('success' , __('user::message.create_success'));
    }
}
