<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateContatosTable.
 */
class CreateContatosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_contatos', function(Blueprint $table) {
            $table->increments('con_in_id')->unsigned();
            $table->string('con_st_nome',200);
            $table->string('con_st_email',200);
            $table->softDeletesTz();
            $table->timestampsTz();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_contatos');
	}
}
