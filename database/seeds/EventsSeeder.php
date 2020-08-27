<?php

use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
    {
        DB::table('events')->insert(['date'=>'21.05.2010','time'=>'23:45:24', 'title' => 'Lupita Smith','image'=>'NULL', 'description' => 'lupita@gmail.com' ]);

    }
}
