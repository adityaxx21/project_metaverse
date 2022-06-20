<?php

namespace Database\Seeders;

use App\Models\user_reg;
use App\Models\user_roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        user_reg::create([
            'id' => 10001,
            'username' => 'adityaxx21',
            'name' => 'Mohammad Aditya',
            'phone_number' => '081335822242',
            'email' => 'test@example.com',
            'address' => 'jl tamansari kediri',
            'gender' => 'Gentlemen',
            'role' => 0,
            'password' => md5('123456'),
        ]);

        user_roles::create([
            'id' => 0,
            'roles' => 'admin'
        ]);
        user_roles::create([
            'roles' => 'users'
        ]);
    }
}
