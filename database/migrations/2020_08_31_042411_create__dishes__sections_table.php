<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesSectionsTable extends Migration
{
    public function up()
    {
        Schema::create('_dishes__sections', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('_dishes__sections');
    }
}
