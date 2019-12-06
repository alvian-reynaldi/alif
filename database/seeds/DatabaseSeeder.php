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
        $this->call(UsersSeeder::class);
        $this->call(BranchesSeeder::class);
        $this->call(KategoriAssetSeeder::class);
        $this->call(AssetsSeeder::class);
        $this->call(KebutuhansSeeder::class);
        $this->call(KategoriDokumensSeeder::class);
        $this->call(DokumensSeeder::class);
        $this->call(InventoryStocksSeeder::class);
    }
}
