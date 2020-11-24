<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroundwaterimpactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groundwaterimpacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userid');
            $table->string('LoC');
            $table->string('SPlp');
            $table->string('DttG');
            $table->string('OIaL');
            $table->string('NdgB');
            $table->string('Aoic');
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
        Schema::dropIfExists('groundwaterimpacts');
    }
}
