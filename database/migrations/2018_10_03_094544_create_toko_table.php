<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTokoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('toko', function(Blueprint $table)
		{
			$table->integer('toko_id', true);
			$table->string('toko_nama', 100);
			$table->string('toko_alamat');
			$table->string('toko_telp', 13);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('toko');
	}

}
