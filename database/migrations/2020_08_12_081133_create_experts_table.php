<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('organisation')->nullable();
            $table->string('expert community')->nullable();
            $table->string('direction')->nullable();
            $table->string('category')->nullable();
            $table->string('education')->nullable();
            $table->string('academic degree')->nullable();
            $table->string('academic rank')->nullable();
            $table->string('scientific interests area')->nullable();
            $table->boolean('examination status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experts');
    }
}
