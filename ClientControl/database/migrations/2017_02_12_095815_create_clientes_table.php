<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('contacto');
			$table->integer('telefono');
			$table->string('observaciones');
			$table->date('fecha_ingreso');
			$table->timestamps();
			$table->integer('persona_id')->unsigned();
			$table->foreign('persona_id')->references('id')->on('personas');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clientes');
	}

}
