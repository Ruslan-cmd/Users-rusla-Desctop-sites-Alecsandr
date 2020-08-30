<?php

use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{

        public function run()
    {

        factory(\App\Event::class, 30) ->create();
       // DB::table('events')->insert(['date'=>'21.05.2010','time'=>'23:45:24', 'title' => 'Lupita Smith','image'=>'NULL', 'description' => 'lupita@gmail.com' ]);

    }
}
