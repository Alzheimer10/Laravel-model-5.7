<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Admin;

class AdminTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ADMINISTRADOR
        $superadmin = Admin::create([
            'name' => 'SUPER',
            'lastname' => 'ADMIN',
            'username' => 'superadmin',
            'password' => Hash::make('superadmin'),
            'email' => 'super@admin.com'
        ]);

       	$superadmin->assignRole('superadmin');
       	// $super_admin->givePermissionTo('config-app');

        $admin = Admin::create([
            'name' => 'ADMIN',
            'lastname' => 'NULL',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'email' => 'admin@admin.com'
        ]);

       	$admin->assignRole('admin');

        $visitor = Admin::create([
            'name' => 'VISITO',
            'lastname' => 'NULL',
            'username' => 'visitor',
            'password' => Hash::make('visitor'),
            'email' => 'visitor@admin.com'
        ]);

       	$visitor->assignRole('visitor');
       	
    }
}
