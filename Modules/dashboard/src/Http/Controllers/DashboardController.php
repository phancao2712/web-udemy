<?php

namespace Modules\Dashboard\src\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function __construct()
    {
    }

    public function index(){
        $titlePage = "Trang thống kê";
        return view('dashboard::dashboard', compact(
            'titlePage'
        ));
    }
}
