<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'     => 'karis',
                'email'    => 'karis@gmail.com',
                'password' => Hash::make('karis@gmail.com'),
                'role_id'  => 2
            ],   
            [
                'name'     => 'lopez',
                'email'    => 'lopez@gmail.com',
                'password' => Hash::make('lopez@gmail.com'),
                'role_id'  => 1
            ],   
        ]);
    }
}
