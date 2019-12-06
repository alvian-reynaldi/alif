<?php

use Illuminate\Database\Seeder;
use App\Asset;

class AssetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $asset = new Asset();
		$asset->categoryid = 1;
		$asset->assetcode = 'SU001';
		$asset->assetname = 'Kertas A4';
		$asset->satuan = 1;
		$asset->jumlah = 75;
		$asset->jumlahmin = 50;
		$asset->save();

        $asset = new Asset();
		$asset->categoryid = 1;
		$asset->assetcode = 'SU002';
		$asset->assetname = 'Amplop Besar';
		$asset->satuan = 2;
		$asset->jumlah = 50;
		$asset->jumlahmin = 30;
		$asset->save();
		
		$asset = new Asset();
		$asset->categoryid = 1;
		$asset->assetcode = 'SU003';
		$asset->assetname = 'Amplop Kecil';
		$asset->satuan = 2;
		$asset->jumlah = 50;
		$asset->jumlahmin = 70;
		$asset->save();

		$asset = new Asset();
		$asset->categoryid = 1;
		$asset->assetcode = 'SU004';
		$asset->assetname = 'Map';
		$asset->satuan = 2;
		$asset->jumlah = 30;
		$asset->jumlahmin = 40;
		$asset->save();

		$asset = new Asset();
		$asset->categoryid = 2;
		$asset->assetcode = 'SU005';
		$asset->assetname = 'HDD Eksternal';
		$asset->satuan = 3;
		$asset->jumlah = 5;
		$asset->jumlahmin = 6;
		$asset->save();
    }
}
