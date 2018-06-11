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
        'name' => 'Navegar usuariol',
        'slug' => 'users.index',
            'description' => 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name' => 'Crear usuario',
            'slug' =>  'users.create',
            'description' => 'Crear a usuario del sistema',
        ]);

        Permission::create([
            'name' => 'Ver detalle de usuario',
            'slug' =>  'users.show',
            'description' => 'Ver en detalle a cada usuario del sistema',
        ]);

        Permission::create([
            'name' => 'Edicion de usuario',
            'slug' =>  'users.edit',
            'description' => 'Editar a los usuarios del sistema',
        ]);

        Permission::create([
            'name' => 'Eliminar usuario',
            'slug' =>  'users.destroy',
            'description' => 'Eliminar a culquier usuario del sistema',
        ]);

        Permission::create([
            'name' => 'Navegar usuario',
            'slug' => 'administrador.index',
            'description' => 'Index a seccion Administrador',
        ]);



        //Roles
        Permission::create([
            'name' => 'Navegar roles ',
            'slug' => 'roles.index',
            'description' => 'Lista y navega a todos los roles del sistema',
        ]);
        Permission::create([
            'name' => 'Crear roles ',
            'slug' => 'roles.create',
            'description' => 'Creacion de roles ',
        ]);
        Permission::create([
            'name' => 'Crear roles ',
            'slug' => 'roles.show',
            'description' => 'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
            'name' => 'Editar roles ',
            'slug' => 'roles.edit',
            'description' => 'Editar a los roles del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar roles ',
            'slug' => 'roles.destroy',
            'description' => 'Eliminar roles',
        ]);
        //Noticias
        Permission::create([
            'name' => 'Navegar en noticias ',
            'slug' => 'noticias.index',
            'description' => 'Lista y navega a todos las moticias del sistema',
        ]);
        Permission::create([
            'name' => 'Crear noticias ',
            'slug' => 'noticias.create',
            'description' => 'Creacion de noticias ',
        ]);
        Permission::create([
            'name' => 'Ver noticias',
            'slug' => 'noticias.show',
            'description' => 'Ver en detalle cada noticia del sistema',
        ]);
        Permission::create([
            'name' => 'Editar noticias ',
            'slug' => 'noticias.edit',
            'description' => 'Editar las noticias del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar noticias ',
            'slug' => 'rnoticias.destroy',
            'description' => 'Eliminar noticias',
        ]);



    }
}
