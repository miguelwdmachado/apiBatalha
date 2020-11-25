<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDadoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dado', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('codigo', 8);
			$table->integer('inicial');
			$table->integer('final');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dado');
	}

}
