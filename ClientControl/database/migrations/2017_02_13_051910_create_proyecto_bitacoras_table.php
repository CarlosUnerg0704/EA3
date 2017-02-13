<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectoBitacorasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proyecto_bitacoras', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha');
			$table->boolean('is_abierto');
			$table->timestamps();

			$table->integer('proyecto_id')->unsigned()->index();
			$table->foreign('proyecto_id')->references('id')->on('proyectos');

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
		Schema::drop('proyecto_bitacoras');
	}

}
