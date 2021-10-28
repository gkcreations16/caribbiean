<?php

use  App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'userid'=>'admin01',
            'name'=>'Admin',
            'role_id'=>'1',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin'),
        ]);

        $user = User::create([
            'userid'=>'user01',
            'name'=>'User',
            'role_id'=>'2',
            'email'=>'user@gmail.com',
            'password'=>bcrypt('user'),
        ]);
    }
}
