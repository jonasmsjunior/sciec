<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersEventsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_events', function(Blueprint $table) {

           // $table->integer('id_user')->unsigned();
          //  $table->foreign('id_user')->references('id')->on('users');

//            $table->integer('id_events')->unsigned();
//            $table->foreign('id_events')->references('id')->on('events');

           // $table->integer('id_participation')->unsigned();
          //  $table->foreign('id_participation')->references('id')->on('participations');

            $table->boolean('status');


           // $table->integer('id_articles')->unsigned();
           // $table->foreign('id_articles')->references('id')->on('articles');
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
		Schema::drop('users_events');
	}

}
