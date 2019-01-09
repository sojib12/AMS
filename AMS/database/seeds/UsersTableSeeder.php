<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id'=> '1',
            'name' => 'Admin',
            'username' => 'admin.am',
            'email' => 'sakib@mail.com',
            'password' => bcrypt('rootadmin'),
        ]);

        DB::table('users')->insert([
            'role_id'=> '2',
            'name' => 'Sojib',
            'username' => 'Sojib',
            'email' => 'sojib@mail.com',
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'role_id'=> '3',
            'name' => 'Sadi',
            'username' => 'Sadi',
            'email' => 'sadi@mail.com',
            'password' => bcrypt('123456'),
        ]);



  /*      DB::table('users')->insert([
            'name' => 'Student',
            'slug' => 'student',
        ]);
        */


    }
}
