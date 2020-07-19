<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [

            [
                'role_name' => 'Admin',
                'role_slug' => 'admin',
            ],
            [
                'role_name' => 'Manager',
                'role_slug' => 'manager',
            ],
            [
                'role_name' => 'Customer',
                'role_slug' => 'customer',
            ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
