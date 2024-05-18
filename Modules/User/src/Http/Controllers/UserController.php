<?php
namespace Modules\User\src\Http\Controllers;

class UserController {
    public function index() {
        return view('user::user');
    }

    public function detail(string $id) {
        echo $id;
    }
}

?>
