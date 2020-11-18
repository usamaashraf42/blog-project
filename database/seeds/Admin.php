<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user =new  User();
       $user->name='Admin';
       $user->email ='admin@admin.com';
       $user->password =Hash::make('secret');
       $user->admin =1;
       $user->auther =1;
        $user->save();
    }
}
