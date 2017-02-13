<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectoPersonalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proyecto_personals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha_ingreso');
			$table->timestamps();

			$table->integer('personal_id')->unsigned()->index();
			$table->foreign('personal_id')->references('id')->on('personals');

			$table->integer('proyecto_id')->unsigned()->index();
			$table->foreign('proyecto_id')->references('id')->on('proyectos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('proyecto_personals');
	}

}
