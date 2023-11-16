<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // admin
        $admin=Role::create(['name'=>'admin']);
        User::create(['name' => 'Admin', 'email' => 'admin@admin.com', 'email_verified_at' => Carbon::now(), 'password' => Hash::make('12345678'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),])->assignRole($admin);

        // user
        $user=Role::create(['name'=>'user']);
        User::create(['name' => 'User', 'email' => 'user@user.com', 'email_verified_at' => Carbon::now(), 'password' => Hash::make('12345678'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),])->assignRole($user);
    }
}
