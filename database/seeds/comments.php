<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class comments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
           [ 'user_id'=>2,
            'post_id'=>1,
            'content'=>'I like your post',
            'created_at'=>\Carbon\Carbon::now()
               ],
            [
                'user_id'=>2,
                'post_id'=>2,
                'content'=>'outstanding post',
                'created_at'=>\Carbon\Carbon::now()
            ]
        ]);
    }
}
