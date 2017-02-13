<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectoAvanceRespuestasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proyecto_avance_respuestas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha');
			$table->string('respuesta');
			$table->timestamps();
			$table->integer('personal_id')->unsigned()->index();
			$table->foreign('personal_id')->references('id')->on('personals');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('proyecto_avance_respuestas');
	}

}
