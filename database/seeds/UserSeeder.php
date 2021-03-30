<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = \Hash::make('admin');
        User::create([
            'name' => 'admin',
            'username' => 'administrator',
            'email' => 'admin@gmail.com',
            'password' => $password,
            'level' => 'admin',
        ]);

        $password2 = \Hash::make('petugas');
        User::create([
            'name' => 'petugas',
            'username' => 'petugas',
            'email' => 'petugas@gmail.com',
            'password' => $password2,
            'level' => 'petugas',
        ]);
    }
}
