<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRodadaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rodada', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_partida');
			$table->timestamp('inicio')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('fim')->nullable();
			$table->integer('id_atacante');
			$table->string('t_atacante', 8);
			$table->integer('id_defensor');
			$table->integer('t_defensor');
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
		Schema::drop('rodada');
	}

}
