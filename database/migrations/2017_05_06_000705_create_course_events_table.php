<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseEventsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_events', function(Blueprint $table) {
           $table->integer('id_cursos')->unsigned();
           $table->foreign('id_cursos')->references('id')->on('courses')->onDelete('cascade');
           $table->integer('id_eventos')->unsigned();
           $table->foreign('id_eventos')->references('id')->on('events')->onDelete('cascade');
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
		Schema::drop('course_events');
	}

}
