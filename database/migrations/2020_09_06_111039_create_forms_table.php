<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->string('time_start_and');
            //$table->time('time_end');
            $table->unsignedInteger('person');
            $table->string('email');
            $table->string('phone');
        });
    }

    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
