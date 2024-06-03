<?php

namespace Modules\Auth\src\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Modules\Auth\src\Http\Requests\RegisterClientRequest;
use Modules\Students\src\Repositories\StudentsRepositoryInterface;

class RegisterController extends Controller
{
    protected $studentRepository;
    public function __construct(
        StudentsRepositoryInterface $studentRepository
    )
    {
        $this->studentRepository = $studentRepository;
        $this->middleware('guest')->except('logout');
    }

    public function showRegisterForm()
    {
        $titlePage = 'Đăng kí';
        return view('auth::client.register', compact(
            'titlePage'
        ));
    }

    public function register(RegisterClientRequest $request){
        $user = $this->studentRepository->create([
            'name' => $request->name,
            'email' => $request->email,
            'status' => 1,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
        ]);

        if (!$user) {
            return back()->with('msg', __('auth::message.register.fail'));
        }
        event(new Registered($user));
        Auth::guard('students')->login($user);
        // return redirect()->route('verification.notice');
        return redirect()->route('home')->with('success', __('auth::message.register.success'));
    }
}
