<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Customer;

class CustomerTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = Customer::create([
            'name' 		=>	'Carlos',
            'lastname' 	=>	'Anselmi',
            'username' 	=>	'anselmi',
            'password' 	=>	Hash::make('123456'),
            'email' 	=>	'carlosanselmi2@gmail.com'
        ]);

       	// $customer->assignRole('customer');

    }
}
