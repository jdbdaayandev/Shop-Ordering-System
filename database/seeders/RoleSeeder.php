<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['role_name' => 'admin'],
            ['role_name' => 'staff'],
            ['role_name' => 'customer'],
        ];

        DB::table('roles')->insert($data);
    }
}
