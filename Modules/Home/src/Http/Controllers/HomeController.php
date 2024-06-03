<?php

namespace Modules\Home\src\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $titlePage = "Trang chủ";
        // dd(auth()->user());
        return view('home::index', compact(
            'titlePage'
        )
        );
    }
}
