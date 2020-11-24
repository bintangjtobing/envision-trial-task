<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHumanimpactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humanimpacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userid');
            $table->string('WoHR');
            $table->string('AoS');
            $table->integer('GEP');
            $table->string('HGC');
            $table->string('SWEP');
            $table->string('HSWC');
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
        Schema::dropIfExists('humanimpacts');
    }
}
