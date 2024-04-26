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
            'email' => 'admin@example.com',
            'password' => bcrypt('admin12345'),
            'email_verified_at' => now(),
        ];
        DB::table('users')->insert($param);
    }
}
