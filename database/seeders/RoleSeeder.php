<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $role = Role::create(['name' => 'gerente']);
        // $permission = Permission::create(['name' => 'delete user']);

        // $role->givePermissionTo($permission);
        // $permission->assignRole($role);

        $user = User::inRandomOrder()->first();
        $user->assignRole('gerente');
    }
}
