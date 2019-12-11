<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddQualitification extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualitification', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('month');
            $table->string('point');
            $table->string('descryption')->nullable();
            $table->bigIncrements('professional_id')->unsigned();
            $table->foreign('professional_id')->references('id')->on('professional')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qualitification');
    }
}
