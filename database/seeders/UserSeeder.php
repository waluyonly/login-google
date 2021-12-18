<?php

namespace Database\Seeders;

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
        \App\Models\User::updateOrCreate([
            'username' => 'admin',
            'name' => 'Admin',
            'email' => 'admin@mail',
            'password' => \Hash::make('password')
        ]);
    }
}
