<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Admin the User',
                'email' => 'admin@email.com',
                'password' => Hash::make('admin1234'),
                'role' => 1
            ]
        ];

        DB::table('users')->insert($user);
    }
}
