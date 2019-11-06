<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list', 
            'role-create',
            'role-edit',
            'role-delete',

            'product-list',
            'product-create',
            'product-edit',
            'product-delete',

            'pages-list',
            'pages-edit',
            'pages-delete',
            'pages-create',

            
            'categories-list',
            'categories-edit',
            'categories-delete',
            'categories-create',

            
            'subcategories-list',
            'subcategories-edit',
            'subcategories-delete',
            'subcategories-create',

            
            'innercategories-list',
            'innercategories-edit',
            'innercategories-delete',
            'innercategories-create',

            'popup-list',
            'popup-edit',
            'popup-delete',
            'popup-create',
 
         ];
 
 
         foreach ($permissions as $permission) {
 
              Permission::create(['name' => $permission]);
 
         }
    }
}
