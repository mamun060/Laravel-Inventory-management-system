<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User seeder data to accesss
        User::create([
        'role_id'=>1,
        'name' => 'Super Admin',
        'email' => 'super@gmail.com',
        'mobile_no' => '01637813648',
        'gender' => 1,
        'password' => 'admin@1234'
        ]);
    }
}
