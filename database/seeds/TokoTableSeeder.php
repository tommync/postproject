<?php

use Illuminate\Database\Seeder;

class TokoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('toko')->delete();
        
        \DB::table('toko')->insert(array (
            0 => 
            array (
                'toko_id' => 1,
                'toko_nama' => 'Adi Jaya',
                'toko_alamat' => 'Dinoyo',
                'toko_telp' => '08513234123',
            ),
            1 => 
            array (
                'toko_id' => 2,
                'toko_nama' => 'Jaya Tech',
                'toko_alamat' => 'Wagir',
                'toko_telp' => '085646337889',
            ),
            2 => 
            array (
                'toko_id' => 3,
                'toko_nama' => 'Castle Inc V2',
                'toko_alamat' => 'Krapyak 2',
                'toko_telp' => '088233441222',
            ),
        ));
        
        
    }
}