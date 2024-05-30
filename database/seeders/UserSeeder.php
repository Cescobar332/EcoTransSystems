<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run() 
    {
        // Crear un usuario con rol de admin
        User::create([
            'name' => 'Carlos Rueda',
            'email' => 'crueda578@unab.edu.co',
            'password' => bcrypt('1234c')
        ])->assignRole('user');

        // Crear 8 usuarios adicionales con el rol de 'user'
        User::factory(8)->create()->each(function ($user) {
            $user->assignRole('user');
        });
    }
}

