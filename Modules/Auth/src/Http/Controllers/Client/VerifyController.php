<?php

namespace Modules\Auth\src\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class VerifyController extends Controller
{

    public function index()
    {
        $titlePage = "Hãy kích hoạt tài khoản";
        return view('auth::client.verify', compact(
            'titlePage'
        ));
    }
}
