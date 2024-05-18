<?php

namespace Modules\User\src\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function __construct()
    {
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
}
