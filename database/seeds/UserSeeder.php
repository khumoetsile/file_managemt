<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $superuserRole = Role::where('name','Super_User')->first();
        $superadminRole = Role::where('name','Super_Admin')->first();
        $actionofficerRole = Role::where('name','Action_Officer')->first();
        $rmuRole = Role::where('name','RMU')->first();

        $Super_User = User::create([
            'name' => 'Super User',
            'email' => 'superuser@gmail.com',
            'password' => Hash::make('password')

        ]);

        $Super_Admin = User::create([
            'name' => 'Super Administrator',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('password')

        ]);

        $Action_Officer = User::create([
            'name' => 'Action Officer',
            'email' => 'action@gmail.com',
            'password' => Hash::make('password')

        ]);

        $RMU = User::create([
            'name' => 'RMU Officer',
            'email' => 'rmu@gmail.com',
            'password' => Hash::make('password')

        ]);

        $Super_User->roles()->attach($superuserRole);
        $Super_Admin->roles()->attach($superadminRole);
        $Action_Officer->roles()->attach($actionofficerRole);
        $RMU->roles()->attach($rmuRole);
    }
}
