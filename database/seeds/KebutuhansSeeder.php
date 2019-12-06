<?php

use Illuminate\Database\Seeder;
use App\Kebutuhan;

class KebutuhansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kebutuhan = new Kebutuhan();
		$kebutuhan->assetid = 2;
		$kebutuhan->jumlah = 30;
		$kebutuhan->pengentri = 1;
		$kebutuhan->waktuinput = '2019-04-29 17:05:20';
		$kebutuhan->save();

		$kebutuhan = new Kebutuhan();
		$kebutuhan->assetid = 4;
		$kebutuhan->jumlah = 25;
		$kebutuhan->pengentri = 2;
		$kebutuhan->waktuinput = '2019-04-29 17:07:15';
		$kebutuhan->save();
    }
}
