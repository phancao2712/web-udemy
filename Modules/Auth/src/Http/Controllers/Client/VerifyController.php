<?php

namespace Modules\Auth\src\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyController extends Controller
{

    public function index(Request $request)
    {
        $user = Auth::user();
        $status = $user->hasVerifiedEmail();
        if ($status) {
            return to_route('home');
        }
        $titlePage = "Hãy kích hoạt tài khoản";
        return view(
            'auth::client.verify',
            compact(
                'titlePage'
            )
        );
    }

    public function resend(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Email kích hoạt đã được gửi!');
    }
}
