<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHumanoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('humano', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('vida');
			$table->integer('forca');
			$table->integer('ataque');
			$table->integer('defesa');
			$table->integer('agilidade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('humano');
	}

}
