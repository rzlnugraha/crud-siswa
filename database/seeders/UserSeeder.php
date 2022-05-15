<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Hafiz MM',
            'email' => 'hafiz@mail.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Admin Hafiz MM',
            'email' => 'admin@mail.com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);
    }
}
