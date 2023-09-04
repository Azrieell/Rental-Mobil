<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
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
        $adminRole = new Role;
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin Rental";
        $adminRole->save();

        $memberRole = new Role;
        $memberRole->name = "member";
        $memberRole->display_name = "Member Rental";
        $memberRole->save();

        //membuat sample admin
        $admin = new User;
        $admin->name = "Admin Rental";
        $admin->email = "admin@gmail.com";
        $admin->alamat= "";
        $admin->nohp= "";
        $admin->sim= "";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt("rahasia");
        $admin->save();
        $admin->attachRole($adminRole);
    }
}
