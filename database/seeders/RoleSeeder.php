<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'admin']);
        $users = Role::create(['name' => 'user']);

        $adminUser = User::create([
            'name' => 'Admin',
            'email' => 'admin@unab.edu.co',
            'password' => bcrypt('qwerty;3'),
        ]);

        $user = User::create([
            'name' => 'user',
            'email' => 'user@unab.edu.co',
            'password' => bcrypt('qwerty;4'),
        ]);

        // Asignar roles a los usuarios
        $adminUser->assignRole($admin);
        $user->assignRole($users);

        Permission::create(['name' => 'estadisticas'])->assignRole($admin);

    }
}
