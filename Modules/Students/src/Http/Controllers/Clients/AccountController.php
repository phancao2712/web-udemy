<?php

namespace Modules\Students\src\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Orders\src\Repositories\OrdersRepositoryInterface;
use Modules\Orders\src\Repositories\OrdersStatusRepositoryInterface;
use Modules\Students\src\Http\Requests\UpdateAccountStudentRequest;
use Modules\Students\src\Http\Requests\UpdatePasswordStudentRequest;
use Modules\Students\src\Repositories\StudentsRepositoryInterface;
use Modules\Teacher\src\Repositories\TeacherRepositoryInterface;

class AccountController extends Controller
{

    protected $studentRepository;
    protected $teacherRepository;
    protected $ordersRepository;
    protected $ordersStatusRepository;

    public function __construct(
        StudentsRepositoryInterface $studentRepository,
        TeacherRepositoryInterface $teacherRepository,
        OrdersRepositoryInterface $ordersRepository,
        OrdersStatusRepositoryInterface $ordersStatusRepository,
    ) {
        $this->studentRepository = $studentRepository;
        $this->teacherRepository = $teacherRepository;
        $this->ordersRepository = $ordersRepository;
        $this->ordersStatusRepository = $ordersStatusRepository;
    }

    public function index()
    {
        $titlePage = "Tổng quan";
        return view(
            'students::clients.index',
            compact(
                'titlePage'
            )
        );
    }
    public function account()
    {
        $titlePage = "Thông tin tài khoản";
        $student = Auth::guard("students")->user();
        return view(
            'students::clients.account',
            compact(
                'titlePage',
                'student'
            )
        );
    }

    public function updateAccount(UpdateAccountStudentRequest $request)
    {
        $id = Auth::guard('students')->user()->id;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;
        $status = $this->studentRepository->update($id, [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
        ]);
        if ($status) {
            return response()->json(['status' => 'success']);
        } else {
            return response()->json(['status' => 'error']);
        }
    }
    public function course(Request $request)
    {
        $studentId = Auth::guard('students')->user()->id;
        $titlePage = "Khóa học của tôi";
        $filters = [];
        if ($request->teacher_id) {
            $filters['teacher_id'] = $request->teacher_id;
        }
        if ($request->keyword) {
            $filters['keyword'] = $request->keyword;
        }
        $courses = $this->studentRepository->getCourse($studentId, $filters, config('pagination.account_limit'));
        $teachers = $this->teacherRepository->getAll(['id', 'name']);

        return view(
            'students::clients.course',
            compact(
                'titlePage',
                'courses',
                'teachers'
            )
        );
    }
    public function order(Request $request)
    {
        $titlePage = "Đơn hàng của tôi";
        $filters = [];
        if ($request->status_id) {
            $filters["status_id"] = $request->status_id;
        }
        if ($request->start_date) {
            $filters["start_date"] = $request->start_date;
        }
        if ($request->end_date) {
            $filters["end_date"] = $request->end_date;
        }
        if ($request->total) {
            $filters["total"] = $request->total;
        }
        
        $orders = $this->ordersRepository->getOrdersByStudent(Auth::guard('students')->user()->id, $filters);
        $orderStatus = $this->ordersStatusRepository->getOrderStatus();
        return view(
            'students::clients.order',
            compact(
                'titlePage',
                'orders',
                'orderStatus'
            )
        );
    }
    public function changePassword()
    {
        $titlePage = "Đổi mật khẩu";
        return view(
            'students::clients.changePassword',
            compact(
                'titlePage'
            )
        );
    }

    public function updatePassword(UpdatePasswordStudentRequest $request)
    {
        $id = Auth::guard('students')->user()->id;
        $status = $this->studentRepository->setPassword($request->password, $id);
        if ($status) {
            return redirect()->back()->with('success', __('students::message.update.success'));
        } else {
            return redirect()->back()->with('error', __('students::message.update.fail'));
        }
    }
}
