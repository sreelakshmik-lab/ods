<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userview', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('fk_designid')->unsigned();
            $table->integer('fk_designid')->references('id')on('designs');
            $table->integer('Rate');
            $table->String('Details');
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
        Schema::dropIfExists('userview');
    }
}
