<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create(
            [
               'name'=>'admin',
               'isAdmin'=>'1',
               'email'=>'admin@gmail.com',
               'password'=>Hash::make('12345678'),
               'image'=>'0P9A9745.jfif',
               'pays'=>'maroc',
               'date_de_naissance'=>NULL
            ]
            );
    }
}
