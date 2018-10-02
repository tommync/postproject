<?php

use Illuminate\Database\Seeder;

class ProdukTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('produk')->delete();
        
        \DB::table('produk')->insert(array (
            0 => 
            array (
                'produk_id' => 1,
                'produk_nama' => 'HDD 320GB',
                'produk_desc' => 'Hardisk Thosiba 320 GB',
                'produk_harga' => 720000,
            ),
            1 => 
            array (
                'produk_id' => 2,
                'produk_nama' => 'RAM 4 GB',
                'produk_desc' => 'RAM Toshiba 4 Gigabyte',
                'produk_harga' => 466000,
            ),
            2 => 
            array (
                'produk_id' => 3,
                'produk_nama' => 'Mouse LoG',
                'produk_desc' => 'Mouse',
                'produk_harga' => 45000,
            ),
        ));
        
        
    }
}