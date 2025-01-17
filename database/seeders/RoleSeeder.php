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
    public function run()
    {
        $roles = [
            ['roleName' => 'Admin', 'isDeleted' => 0],
            ['roleName' => 'Teacher', 'isDeleted' => 0],
            ['roleName' => 'Student', 'isDeleted' => 0],
        ];

        DB::table('role')->insert($roles);
    }
}
