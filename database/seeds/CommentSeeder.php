<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{

    public function run()
    {
         factory(\App\Comment::class, 10)->create();

    }
}
