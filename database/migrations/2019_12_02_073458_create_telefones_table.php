<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateTelefonesTable.
 */
class CreateTelefonesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_telefones', function(Blueprint $table) {
            $table->increments('tel_in_id')->unsigned();
            $table->string('tel_in_ddd',3);
            $table->string('tel_in_telefone',15);
            $table->timestampsTz();
            $table->softDeletesTz();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_telefones');
	}
}
