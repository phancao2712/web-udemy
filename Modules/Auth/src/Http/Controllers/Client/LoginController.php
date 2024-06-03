<?php

namespace Modules\Auth\src\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Flasher\Laravel\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Modules\Auth\src\Http\Requests\LoginClientRequest;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::ADMIN;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:students')->except('logout');
    }

    public function showLoginForm()
    {
        $titlePage = 'Đăng nhập';
        return view(
            'auth::client.login',
            compact(
                'titlePage'
            )
        );
    }

    public function login(LoginClientRequest $request)
    {
        $user = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $remember = $request->remember == 1 ? true : false;

        if (Auth::guard('students')->attempt($user, $remember)) {
            return redirect()->route('home')->with('success', 'Đăng nhập thành công');
        }

        return back()->withErrors([
            'email' => 'Email hoặc mật khẩu không đúng',
        ])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();

        return redirect()->route('home')->with('success','Đăng xuất thành công');
    }

}
