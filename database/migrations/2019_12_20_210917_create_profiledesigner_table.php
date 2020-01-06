<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfiledesignerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiledesigner', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('log_fk')->unsigned();
            // $table->integer('log_fk')->nullable()->change();
            // $table->integer('log_fk')->references('id')-> on('userreg');
            $table->integer('designerid');
            $table->string('edu_quali');
            $table->string('work_exp');
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
        Schema::dropIfExists('profiledesigner');
    }
}
