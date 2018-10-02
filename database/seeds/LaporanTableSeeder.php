<?php

use Illuminate\Database\Seeder;

class LaporanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('laporan')->delete();
        
        \DB::table('laporan')->insert(array (
            0 => 
            array (
                'laporan_id' => 1,
                'toko_id' => 1,
                'produk_id' => 1,
                'target' => 50,
                'hasil' => 30,
            ),
            1 => 
            array (
                'laporan_id' => 3,
                'toko_id' => 1,
                'produk_id' => 2,
                'target' => 50,
                'hasil' => 30,
            ),
            2 => 
            array (
                'laporan_id' => 4,
                'toko_id' => 2,
                'produk_id' => 1,
                'target' => 50,
                'hasil' => 23,
            ),
            3 => 
            array (
                'laporan_id' => 5,
                'toko_id' => 2,
                'produk_id' => 3,
                'target' => 100,
                'hasil' => 75,
            ),
            4 => 
            array (
                'laporan_id' => 6,
                'toko_id' => 1,
                'produk_id' => 3,
                'target' => 300,
                'hasil' => 290,
            ),
            5 => 
            array (
                'laporan_id' => 7,
                'toko_id' => 3,
                'produk_id' => 3,
                'target' => 200,
                'hasil' => 220,
            ),
        ));
        
        
    }
}