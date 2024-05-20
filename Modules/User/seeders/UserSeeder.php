<?php

namespace Modules\User\seeders;

use Faker\Factory;
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
        // $user = new User();
        // $user->name = "Phan Văn Cao";
        // $user->email = "admin@gmail.com";
        // $user->password = Hash::make('123456');
        // $user->group_id= 1;
        // $user->save();

        $faker = Factory::create();

        for ($i = 0; $i < 30; $i++) {
            $user = new User();
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->password = Hash::make('123456');
            $user->group_id = 1;
            $user->save();
        }
    }
}
