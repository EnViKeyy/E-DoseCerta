<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drugs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('specieId')->unsigned();
            $table->foreign('specieId')->references('id')->on('species');
            $table->integer('medicineId')->unsigned();
            $table->foreign('medicineId')->references('id')->on('medicines');
            $table->double('maximumDose');
            $table->double('minimumDose');
            $table->double('averageDose');
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
        Schema::dropIfExists('drugs');
    }
}
