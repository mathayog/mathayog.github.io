<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'firstname' => 'User',
                'lastname' => 'User I',
                'email' => 'user@user.com',
                'role' => 'user',
                'password' => Hash::make('111'),
            ]
        ]);
        DB::table('users')->insert([
            [
                'firstname' => 'Content',
                'lastname' => 'Creator I',
                'email' => 'content@creator.com',
                'role' => 'content_creator',
                'password' => Hash::make('222'),
            ]
        ]);
        DB::table('users')->insert([
            [
                'firstname' => 'Admin',
                'lastname' => 'Admin I',
                'email' => 'admin@admin.com',
                'role' => 'admin',
                'password' => Hash::make('333'),
            ]
        ]);
    }
}
