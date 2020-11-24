<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChemicaldatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chemicaldatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userid');
            $table->string('chemicalid');
            $table->float('CiS');
            $table->float('CiG');
            $table->float('CiSW');
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
        Schema::dropIfExists('chemicaldatas');
    }
}
