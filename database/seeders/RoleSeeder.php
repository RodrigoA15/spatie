<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void 
     */ 
    public function run()
    {
        $role1 = Role::create(['name'=> 'administrador']);
        $role2 = Role::create(['name'=> 'empleado']);


        permission::create(['name'=> 'registro.index'])->syncRoles([$role1]);
        permission::create(['name'=> 'registro,create'])->syncRoles([$role1]);
        permission::create(['name'=> 'registro.edit'])->syncRoles([$role1]);
        permission::create(['name'=> 'registro.destroy'])->syncRoles([$role1]);

        permission::create(['name'=> 'registro.index'])->syncRoles([$role2]);

    }
} 
