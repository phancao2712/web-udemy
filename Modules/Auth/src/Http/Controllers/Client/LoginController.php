<?php

namespace Modules\Auth\src\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

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
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        $titlePage = 'Đăng nhập';
        return view('auth::client.login', compact(
            'titlePage'
        ));
    }

    public function showRegisterForm()
    {
        $titlePage = 'Đăng kí';
        return view('auth::client.register', compact(
            'titlePage'
        ));
    }

    // protected function sendFailedLoginResponse(Request $request)
    // {
    //     throw ValidationException::withMessages([
    //         $this->username() => [__('auth::message.login.fail')],
    //     ]);
    // }

    // protected function loggedOut(Request $request)
    // {
    //     return redirect($this->redirectTo)->with('success', __('auth::message.logout.success'));
    // }

}
