<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$ak/uyoI/bz4ExmnuCrd7Oehc7QC4VLudmjddoa8aWgPYgs.FOc6VS',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
