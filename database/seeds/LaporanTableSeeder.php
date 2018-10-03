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
                'laporan_id' => 4,
                'toko_id' => 2,
                'produk_id' => 1,
                'target' => 50,
                'hasil' => 23,
            ),
            2 => 
            array (
                'laporan_id' => 5,
                'toko_id' => 2,
                'produk_id' => 3,
                'target' => 100,
                'hasil' => 75,
            ),
            3 => 
            array (
                'laporan_id' => 6,
                'toko_id' => 1,
                'produk_id' => 3,
                'target' => 300,
                'hasil' => 290,
            ),
            4 => 
            array (
                'laporan_id' => 7,
                'toko_id' => 3,
                'produk_id' => 3,
                'target' => 200,
                'hasil' => 220,
            ),
            5 => 
            array (
                'laporan_id' => 9,
                'toko_id' => 1,
                'produk_id' => 2,
                'target' => 40,
                'hasil' => 50,
            ),
            6 => 
            array (
                'laporan_id' => 10,
                'toko_id' => 1,
                'produk_id' => 5,
                'target' => 40,
                'hasil' => 80,
            ),
            7 => 
            array (
                'laporan_id' => 11,
                'toko_id' => 1,
                'produk_id' => 8,
                'target' => 50,
                'hasil' => 55,
            ),
            8 => 
            array (
                'laporan_id' => 12,
                'toko_id' => 1,
                'produk_id' => 9,
                'target' => 30,
                'hasil' => 10,
            ),
            9 => 
            array (
                'laporan_id' => 13,
                'toko_id' => 1,
                'produk_id' => 7,
                'target' => 60,
                'hasil' => 45,
            ),
            10 => 
            array (
                'laporan_id' => 14,
                'toko_id' => 2,
                'produk_id' => 9,
                'target' => 30,
                'hasil' => 35,
            ),
            11 => 
            array (
                'laporan_id' => 15,
                'toko_id' => 2,
                'produk_id' => 6,
                'target' => 50,
                'hasil' => 23,
            ),
            12 => 
            array (
                'laporan_id' => 16,
                'toko_id' => 2,
                'produk_id' => 5,
                'target' => 40,
                'hasil' => 45,
            ),
            13 => 
            array (
                'laporan_id' => 18,
                'toko_id' => 2,
                'produk_id' => 7,
                'target' => 69,
                'hasil' => 50,
            ),
            14 => 
            array (
                'laporan_id' => 19,
                'toko_id' => 3,
                'produk_id' => 9,
                'target' => 30,
                'hasil' => 32,
            ),
            15 => 
            array (
                'laporan_id' => 20,
                'toko_id' => 3,
                'produk_id' => 6,
                'target' => 60,
                'hasil' => 68,
            ),
            16 => 
            array (
                'laporan_id' => 21,
                'toko_id' => 3,
                'produk_id' => 8,
                'target' => 40,
                'hasil' => 45,
            ),
        ));
        
        
    }
}