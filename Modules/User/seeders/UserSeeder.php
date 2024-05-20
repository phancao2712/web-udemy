<?php

namespace Modules\User\seeders;

use Illuminate\Database\Seeder;
use Modules\User\src\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = "Phan Văn Cao";
        $user->email = "admin@gmail.com";
        $user->password = Hash::make('1234');
        $user->group_id= 1;
        $user->save;
    }
}
