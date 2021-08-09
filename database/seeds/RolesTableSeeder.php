<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['name' => 'Super_User']);
        Role::create(['name' => 'Super_Admin']);
        Role::create(['name' => 'Action_Officer']);
        Role::create(['name' => 'RMU']);
    }
}
