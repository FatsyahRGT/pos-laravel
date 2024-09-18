<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Eloquent
        // Insert into user
        User::create([
            'name' => 'administrator',
            'id_level' => '1',
            'email' => 'administrator@gmail.com',
            'password' => Hash::make('12345678'),

            'name' => 'admin',
            'id_level' => '2',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),

            'name' => 'kasir',
            'id_level' => '3',
            'email' => 'kasir@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        // Alternatively, you can use the following code
        // $user = new User();
        // $user->name = 'Admin';
        // $user->email = 'admin@gmail.com';
        // $user->password = Hash::make('12345678');
        // $user->id_level = '1';
        // $user->save();
    }
}
