<?php

use Illuminate\Database\Seeder;
use App\KategoriAsset;

class KategoriAssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategoriAsset = new KategoriAsset();
		$kategoriAsset->categorycode = "ATK";
		$kategoriAsset->categoryname = 'Supply Kebutuhan Kantor';
		$kategoriAsset->save();

        $kategoriAsset = new KategoriAsset();
		$kategoriAsset->categorycode = "ITY";
		$kategoriAsset->categoryname = 'IT Infrastructure';
		$kategoriAsset->save();
    }
}
