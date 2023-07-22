<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {   
        DB::table('users')->insert([
            'name'=>'admin',
            'role'=>'Advance',
            'address'=>'london',
            'email'=>'admin@admin.com',
            'password'=>'admin123',
        ]);
    }
}