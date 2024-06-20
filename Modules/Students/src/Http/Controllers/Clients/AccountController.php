<?php

namespace Modules\Students\src\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Modules\Students\src\Repositories\StudentsRepositoryInterface;

class AccountController extends Controller
{

    protected $studentRepository;

    public function __construct(StudentsRepositoryInterface $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function index()
    {
        $titlePage = "Tổng quan";
        return view('students::clients.index', compact(
            'titlePage'
        ));
    }
    public function account()
    {
        $titlePage = "Thông tin";
        return view('students::clients.account', compact(
            'titlePage'
        ));
    }
    public function course()
    {
        $titlePage = "Khóa học của tôi";
        return view('students::clients.course', compact(
            'titlePage'
        ));
    }
    public function order()
    {
        $titlePage = "Đơn hàng";
        return view('students::clients.order', compact(
            'titlePage'
        ));
    }
    public function changePassword()
    {
        $titlePage = "Đổi mật khẩu";
        return view('students::clients.changePassword', compact(
            'titlePage'
        ));
    }
}
