<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Kautsar Albana',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Nandanis Ikhwan Firdaus',
            'email' => 'staff@staff.com',
            'password' => bcrypt('password'),
            'role' => 'staff'
        ]);

        User::create([
            'name' => 'Hilwa Salma Syahdan',
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
            'role' => 'user'
        ]);
    }
}
