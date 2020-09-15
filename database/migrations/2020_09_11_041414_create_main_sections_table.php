<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainSectionsTable extends Migration
{
    public function up()
    {
        Schema::create('main_sections', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_main_section', 10);
            $table->timestamps();

        });
    }
    public function down()
    {
        Schema::dropIfExists('main_sections');
    }
}
