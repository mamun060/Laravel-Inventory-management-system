<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // role model seeder data
        Role::insert([
            ['role_name' => 'Super Admin' , 'deletable' =>false],
            ['role_name' => 'Admin' , 'deletable' =>false]
        ]);

    }
}
