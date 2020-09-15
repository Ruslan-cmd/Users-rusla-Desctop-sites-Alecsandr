<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableReservationsTable extends Migration
{
    public function up()
    {
        Schema::create('table_reservations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->date('date')->index();
            $table->string('time_period');
            $table->unsignedTinyInteger('persons_count');
            $table->string('email')->nullable();
            $table->string('phone')->index();
            $table->timestamps();
        });    }


    public function down()
    {
        Schema::dropIfExists('table_reservations');
    }
}
