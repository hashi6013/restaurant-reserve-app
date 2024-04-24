<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '管理太郎',
            'role' => 'admin',
            'email' => 'test@admin.com',
            'password' => 'test12345'
        ];
        DB::table('users')->insert($param);
    }
}
