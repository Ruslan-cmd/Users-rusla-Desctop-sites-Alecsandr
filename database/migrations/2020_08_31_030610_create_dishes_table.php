<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesTable extends Migration
{
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('main_section_id');//->default(1);
           // $table->foreign('main_section_id')
             //   ->references('id')->on('main_sections')
             //   ->onDelete('cascade');
            $table->string('dish');
            $table->unsignedInteger('price');
        });
    }

    public function down()
    {
        Schema::dropIfExists('dishes');
    }
}
