<?php

namespace Modules\Auth\src\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Modules\Students\src\Models\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function showFormForgotPassword()
    {
        $titlePage = 'Quên mật khẩu';
        return view(
            'auth::client.forgot',
            compact(
                'titlePage'
            )
        );
    }

    public function handleSendForgotLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::broker('students')->sendResetLink(
            $request->only('email')
        );

        $status === Password::RESET_LINK_SENT;

        if ($status) {
            if ($status == 'passwords.sent') {
                return back()->with(['success' => __('auth::message.' . $status)]);
            }
            return back()->with(['error' => __('auth::message.' . $status)]);
        }

        return redirect()->back()->with(['error' => 'Đã xảy ra lỗi! Vui lòng thử lại']);
    }

    public function showFormResetPassword($token)
    {
        $titlePage = 'Đặt lại mật khẩu';
        return view(
            'auth::client.reset',
            compact(
                'titlePage'
            )
        );
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);

        $status = Password::broker('students')->reset(
            $request->only('email', 'password', 'confirm_password', 'token'),
            function (Student $student, string $password) {
                $student->forceFill([
                    'password' => hash::make($password)
                ])->setRememberToken(Str::random(60));

                $student->save();

                event(new PasswordReset($student));
            }

        );

        $status === Password::PASSWORD_RESET;

        if($status == 'passwords.reset') {
            return redirect()->route('client.login')->with('success', __('auth::message.passwords.reset.success'));
        }

        return redirect()->back()->with('error', __('auth::message.passwords.reset.fail'));
    }


}
