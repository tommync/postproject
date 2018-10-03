<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProdukTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produk', function(Blueprint $table)
		{
			$table->integer('produk_id', true);
			$table->string('produk_nama', 100);
			$table->string('produk_desc', 100);
			$table->integer('produk_harga');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produk');
	}

}
