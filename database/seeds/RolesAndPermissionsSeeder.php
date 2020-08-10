<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;
use Illuminate\Support\Str;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'create articles']);
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role1 = Role::create(['name' => 'writer']);
        $role1->givePermissionTo('create articles');

        // // or may be done by chaining
        Role::create(['name' => 'editor'])->givePermissionTo(['create articles','edit articles','delete articles' ,'publish articles', 'unpublish articles']);

        $role3 = Role::create(['name' => 'super-admin']);
        $role3->givePermissionTo(Permission::all());

    }
}
