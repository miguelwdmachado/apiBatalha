<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartidaRodadaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('partida_rodada', function(Blueprint $table)
		{
			$table->integer('id_partida')->index('pr_partida_id');
			$table->integer('id_rodada')->index('pr_rodata_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('partida_rodada');
	}

}
