<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectoDatosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proyecto_datos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha');
			$table->double('monto');
			$table->string('observaciones');
			$table->timestamps();

			$table->integer('proyecto_id')->unsigned()->index();
			$table->foreign('proyecto_id')->references('id')->on('proyectos');

			$table->integer('estatus_id')->unsigned()->index();
			$table->foreign('estatus_id')->references('id')->on('estatuses');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('proyecto_datos');
	}

}
