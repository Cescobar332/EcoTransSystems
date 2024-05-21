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
        User::create([
            'name' => 'Maria Camila Villamizar Villamizar',
            'email' => 'mvillamizar666@unab.edu.co',
            'password' => bcrypt('Lavidaes112233')
        ])->assignRole('admin');
        // Crear 9 usuarios con el rol de 'User'
        User::factory(9)->create()->each(function ($user) {
            $user->assignRole('user');
        });
    }
}
