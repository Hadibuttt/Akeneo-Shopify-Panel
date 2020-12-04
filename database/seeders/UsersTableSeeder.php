<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use\Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;
use DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name','admin')->first();
        $moderatorRole = Role::where('name','moderator')->first();
        $userRole = Role::where('name','user')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);

        $moderator = User::create([
            'name' => 'Moderator User',
            'email' => 'moderator@moderator.com',
            'password' => Hash::make('password')
        ]);

        $user = User::create([
            'name' => 'Generic User',
            'email' => 'user@user.com',
            'password' => Hash::make('password')
        ]);

        $admin->roles()->attach($adminRole);
        $moderator->roles()->attach($moderatorRole);
        $user->roles()->attach($userRole);
    }
}