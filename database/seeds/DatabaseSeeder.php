<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TokoTableSeeder::class);
        $this->call(ProdukTableSeeder::class);
        $this->call(LaporanTableSeeder::class);
    }
}
