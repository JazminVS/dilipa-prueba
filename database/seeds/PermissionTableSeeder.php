<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
            'name' => 'Navegar usuario',
            'slug' => 'administrador.index',
            'description' => 'Index a seccion Administrador',
        ]);
        //Roles
        Permission::create([
            'name' => 'Crear roles ',
            'slug' => 'roles.crear',
            'description' => 'Index a seccion Administrador',
        ]);


    }
}
