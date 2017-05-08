<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityUsersTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_users', function(Blueprint $table) {
            $table->increments('id');
            $table->boolean('status');
            $table->boolean('presenca');
            $table->dateTime('data_entrada');
            $table->dateTime('data_saida');

            $table->integer('id_users')->unsigned();
            $table->foreign('id_users')->references('id')->on('users');

            $table->integer('id_activities')->unsigned();
            $table->foreign('id_activities')->references('id')->on('activities');

            $table->integer('id_type_activity_user')->unsigned();
            $table->foreign('id_type_activity_user')->references('id')->on('type_users');

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
		Schema::drop('activity_users');
	}

}
