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
            $table->string('dish');
            $table->unsignedInteger('price');
            $table->foreign('main_section_id')
                ->references('id')->on('main_sections')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('dishes');
    }
}
