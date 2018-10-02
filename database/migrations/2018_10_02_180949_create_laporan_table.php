<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLaporanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('laporan', function(Blueprint $table)
		{
			$table->integer('laporan_id', true);
			$table->integer('toko_id')->index('toko_id');
			$table->integer('produk_id')->index('barang_id');
			$table->integer('target');
			$table->integer('hasil');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('laporan');
	}

}
