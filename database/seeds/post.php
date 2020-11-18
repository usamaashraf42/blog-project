<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class post extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
           [
               'user_id'=>2,
            'title'=>'A tale of two cities',
            'content'=>'Written by Charles Dickens',
               'created_at'=>\Carbon\Carbon::now()
       ],
            [
                'user_id'=>2,
                'title'=>'United Nation 75th Session',
                'content'=>'Online address by P< of nations',
                'created_at'=>\Carbon\Carbon::now()
            ]
        ]);
    }
}
