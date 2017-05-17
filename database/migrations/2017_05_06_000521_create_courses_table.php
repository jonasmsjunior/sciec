<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function(Blueprint $table) {

            $table->increments('id');
            $table->string('nome',45);
            $table->text('descricao');
            $table->boolean('status');
            $table->string('telefone');
            $table->integer('id_instutions')->unsigned();
            $table->foreign('id_instutions')->references('id')->on('instutions')->onDelete('cascade');

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
        Schema::drop('courses');
    }

}
