<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->date('date');
            $table->time('time_start');
            $table->time('time_end');
            $table->mediumText('description');
            $table->string('organizer');
            $table->unsignedInteger('price');
            $table->string('phone');
            $table->string('email');
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}
