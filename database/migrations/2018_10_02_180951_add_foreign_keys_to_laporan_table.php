<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLaporanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('laporan', function(Blueprint $table)
		{
			$table->foreign('produk_id', 'produk')->references('produk_id')->on('produk')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('toko_id', 'toko')->references('toko_id')->on('toko')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('laporan', function(Blueprint $table)
		{
			$table->dropForeign('produk');
			$table->dropForeign('toko');
		});
	}

}
