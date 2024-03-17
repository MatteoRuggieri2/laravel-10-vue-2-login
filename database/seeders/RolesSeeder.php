<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Prendo i ruoli da file "roles.php" dentro "config"
        $roles = config('roles');
        
        // Per ogni ruolo ne creo uno nuovo e metto il nome
        foreach ($roles as $role) {
            $new_role = new Role();
            $new_role->role_name = $role['role_name'];
            $new_role->save();
        }
    }
}
