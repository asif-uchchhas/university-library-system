<?php

use Illuminate\Database\Seeder;

use\App\Role;
use\App\User;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_student = new Role();
        $role_student->name= "Asif";
        $role_student->description= " A role of student";
        $role_student->save();

        $role_admin = new Role();
        $role_admin->name= "Devskill";
        $role_admin->description= " A role of Admin";
        $role_admin->save();
    

    }
}
