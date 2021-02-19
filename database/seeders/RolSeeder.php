<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol_admin = Role::create(['name'=>'admin']);
        $rol_blog = Role::create(['name'=>'bloger']);

        Permission::create(['name'=>'admin.home'])->syncRoles([$rol_admin,$rol_blog]);

        Permission::create(['name'=>'admin.users.index'])->syncRoles([$rol_admin]);
        Permission::create(['name'=>'admin.users.edit'])->syncRoles([$rol_admin]);
        Permission::create(['name'=>'admin.users.update'])->syncRoles([$rol_admin]);

        Permission::create(['name'=>'admin.categories.index'])->syncRoles([$rol_admin]);
        Permission::create(['name'=>'admin.categories.create'])->syncRoles([$rol_admin]);
        Permission::create(['name'=>'admin.categories.edit'])->syncRoles([$rol_admin]);
        Permission::create(['name'=>'admin.categories.destroy'])->syncRoles([$rol_admin]);

        Permission::create(['name'=>'admin.tags.index'])->syncRoles([$rol_admin]);
        Permission::create(['name'=>'admin.tags.create'])->syncRoles([$rol_admin]);
        Permission::create(['name'=>'admin.tags.edit'])->syncRoles([$rol_admin]);
        Permission::create(['name'=>'admin.tags.destroy'])->syncRoles([$rol_admin]);

        Permission::create(['name'=>'admin.posts.index'])->syncRoles([$rol_admin,$rol_blog]);
        Permission::create(['name'=>'admin.posts.create'])->syncRoles([$rol_admin,$rol_blog]);
        Permission::create(['name'=>'admin.posts.edit'])->syncRoles([$rol_admin,$rol_blog]);
        Permission::create(['name'=>'admin.posts.destroy'])->syncRoles([$rol_admin,$rol_blog]);

    }
}
