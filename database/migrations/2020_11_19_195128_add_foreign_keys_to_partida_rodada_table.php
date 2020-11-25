<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPartidaRodadaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('partida_rodada', function(Blueprint $table)
		{
			$table->foreign('id_partida', 'pr_partida_id')->references('id')->on('partida')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('id_rodada', 'pr_rodata_id')->references('id')->on('rodada')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('partida_rodada', function(Blueprint $table)
		{
			$table->dropForeign('pr_partida_id');
			$table->dropForeign('pr_rodata_id');
		});
	}

}
