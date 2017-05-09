<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstutionsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('instutions', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nome',45);
            $table->string('site',255)->unique();
            $table->string('email',45)->unique();
            $table->text('descricao');
            $table->string('telefone',45);
            $table->boolean('status');
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
		Schema::drop('instutions');
	}

}
