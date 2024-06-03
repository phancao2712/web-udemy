<?php

namespace Modules\Auth\src\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Students\src\Repositories\StudentsRepositoryInterface;

class BlockController extends Controller
{
    protected $studentRepository;
    public function __construct(
        StudentsRepositoryInterface $studentRepository
    )
    {
        $this->middleware('auth:students');
    }

    public function index(Request $request){
        $user = $request->user();
        if($user->status){
            return to_route('home');
        }
        $titlePage = 'Tài khoản của bạn đã bị khóa';
        return view('auth::client.block', compact(
            'titlePage'
        ));
    }
}
