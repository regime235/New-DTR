<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'John Doe',
            'phone' => '09239160388',
            'status' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

        \DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Kobe Andaya',
            'phone' => '09995348497',
            'status' => 'student',
            'email' => 'user@user.com',
            'password' => bcrypt('password')
        ]);

        \DB::table('users')->insert([
            'role_id' => 3,
            'name' => 'Jhie Bunda',
            'phone' => '09999999999',
            'status' => 'faculty',
            'email' => 'user2@user.com',
            'password' => bcrypt('password')
        ]);
    }

}
