<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proyectos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha_registro');
			$table->string('nombre');
			$table->string('descripcion');
			$table->date('fecha_inicio');
			$table->date('fecha_finalizacion');
			$table->double('costo');
			$table->timestamps();
			$table->integer('cliente_id')->unsigned()->index();
			$table->foreign('cliente_id')->references('id')->on('clientes');

			$table->integer('tipo_id')->unsigned()->index();
			$table->foreign('tipo_id')->references('id')->on('tipos');

			$table->integer('moneda_id')->unsigned()->index();
			$table->foreign('moneda_id')->references('id')->on('monedas');

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
		Schema::drop('proyectos');
	}

}
