<?php

namespace Modules\User\src\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\User\Requests\UserStoreRequest;
use Modules\User\src\Repositories\UserRepositoryInterface;

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

    public function store(UserStoreRequest $request) {
        $this->userRepository->create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'group_id' => $request->group_id,
                'password' => $request->password,
            ]
        );
        return to_route('admin.user.index')->with('success' , __('user::message.create_success'));
    }
}
