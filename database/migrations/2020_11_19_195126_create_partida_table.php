<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartidaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('partida', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->timestamp('inicio')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('fim')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('vencedor', 8)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('partida');
	}

}
