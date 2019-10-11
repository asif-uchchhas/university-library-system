<?php

use Illuminate\Database\Seeder;

use\App\Role;
use\App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_student = Role::where('name','student')->first();
        $role_admin = Role::where('name','admin')->first();

        $student = new User();
        $student->university_id ="123456";
        $student->name ="Asif siddque";
        $student->email ="asif@gmail.com";
        $student->password=bcrypt('Apple');
        $student->save();
        $student->roles()->attach($role_student);


        $admin = new User();
        $admin->university_id ="123";
        $admin->name ="devskill";
        $admin->email ="devskill@gmail.com";
        $admin->password=bcrypt('devskill');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
