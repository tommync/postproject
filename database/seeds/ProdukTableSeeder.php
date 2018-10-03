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
            3 => 
            array (
                'produk_id' => 4,
                'produk_nama' => 'SSD 500GB',
                'produk_desc' => 'SSD 500GB',
                'produk_harga' => 1200000,
            ),
            4 => 
            array (
                'produk_id' => 5,
                'produk_nama' => 'Marvo Scorpion H8311',
                'produk_desc' => 'Headphone Gaming',
                'produk_harga' => 150000,
            ),
            5 => 
            array (
                'produk_id' => 6,
                'produk_nama' => 'Rexus Warfaction VR1',
                'produk_desc' => 'Keyboard Mouse Gaming',
                'produk_harga' => 250000,
            ),
            6 => 
            array (
                'produk_id' => 7,
                'produk_nama' => 'Rainbow Mechanical Warior X800',
                'produk_desc' => 'Keyboard gaming mekanik',
                'produk_harga' => 150000,
            ),
            7 => 
            array (
                'produk_id' => 8,
                'produk_nama' => 'Genius Gxx Gaming SW.G2',
                'produk_desc' => 'Speaker Gaming',
                'produk_harga' => 800000,
            ),
            8 => 
            array (
                'produk_id' => 9,
                'produk_nama' => 'MOTHERBOARD MSI A68HM-E33 V2',
            'produk_desc' => 'Original MSI Motherboard For Socket FM2+ (AMD Kaveri)',
                'produk_harga' => 780000,
            ),
        ));
        
        
    }
}