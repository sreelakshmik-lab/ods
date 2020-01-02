<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedesignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_designerid')->unsigned();
            $table->integer('fk_designerid')->nullable()->change();
            $table->foreign('fk_designerid')->references('id')->on('profiledesigner');
            $table->string('design_type');
            $table->mediumText('designs')->nullable();
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
        Schema::dropIfExists('designs');
    
    }
}
