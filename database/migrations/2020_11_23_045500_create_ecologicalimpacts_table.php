<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcologicalimpactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecologicalimpacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userid');
            $table->string('WoAR');
            $table->string('erosion');
            $table->string('RGR');
            $table->string('RGRterr');
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
        Schema::dropIfExists('ecologicalimpacts');
    }
}
