<?php

namespace Modules\Students\src\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Students\src\Http\Requests\UpdateAccountStudentRequest;
use Modules\Students\src\Http\Requests\UpdatePasswordStudentRequest;
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
        $titlePage = "Thông tin tài khoản";
        $student = Auth::guard("students")->user();
        return view('students::clients.account', compact(
            'titlePage',
            'student'
        ));
    }

    public function updateAccount(UpdateAccountStudentRequest $request){
        $id = Auth::guard('students')->user()->id;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;
        $status = $this->studentRepository->update($id, [
            'name'=> $name,
            'email'=> $email,
            'phone'=> $phone,
            'address'=> $address,
        ]);
        if($status){
            return response()->json(['status'=> 'success']);
        } else {
            return response()->json(['status'=> 'error']);
        }
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

    public function updatePassword(UpdatePasswordStudentRequest $request){
        $id = Auth::guard('students')->user()->id;
        $status = $this->studentRepository->setPassword($request->password, $id);
        if($status){
            return redirect()->back()->with('success', __('students::message.update.success'));
        } else {
            return redirect()->back()->with('error', __('students::message.update.fail'));
        }
    }
}
