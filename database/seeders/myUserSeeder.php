<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class myUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => "akash",
                'email' => "akash@gmail.com",
                'password' => Hash::make('password'),
            ],
            [
                'name' => "babul",
                'email' => "babul@gmail.com",
                'password' => Hash::make('password'),
            ],
            [
                'name' => "sabbir",
                'email' => "sabbir@gmail.com",
                'password' => Hash::make('password'),
            ],
            [
                'name' => "kishore",
                'email' => "kishore@gmail.com",
                'password' => Hash::make('password'),
            ],
            [
                'name' => "rokeya",
                'email' => "rokeya@gmail.com",
                'password' => Hash::make('password'),
            ],
            [
                'name' => "hiya",
                'email' => "hiya@gmail.com",
                'password' => Hash::make('password'),
            ],
            
        ]);
    }
}
