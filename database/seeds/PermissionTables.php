<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	Role::create(['guard_name' => 'admin','name' => 'superadmin']);
       	Role::create(['guard_name' => 'admin','name' => 'admin']);
        Role::create(['guard_name' => 'admin','name' => 'visitor']);
        Role::create(['guard_name' => 'customer','name' => 'customer']);

        Permission::create(['name' => 'config-app']);
    }
}
