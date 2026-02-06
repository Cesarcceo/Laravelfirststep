<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name'=> 'Admin']);
        Role::create(['name'=> 'Editor']);

        Permission::create(['name' => 'editor.post.index']);
        Permission::create(['name' => 'editor.post.create']);
        Permission::create(['name' => 'editor.post.update']);
        Permission::create(['name' => 'editor.post.destroy']);

        Permission::create(['name' => 'editor.categorie.index']);
        Permission::create(['name' => 'editor.categorie.create']);
        Permission::create(['name' => 'editor.categorie.update']);
        Permission::create(['name' => 'editor.categorie.destroy']);
    }
}
