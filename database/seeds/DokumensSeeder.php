<?php

use Illuminate\Database\Seeder;
use App\Dokumen;

class DokumensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dokumen = new Dokumen();
		$dokumen->categoryid = 1;
		$dokumen->docno = '001/FIN/VII/2018';
		$dokumen->docname = 'Limit dan Kewenangan';
		$dokumen->filename = 'A1.pdf';
		$dokumen->status = 1;
		$dokumen->owner = 3;
		$dokumen->save();

		$dokumen = new Dokumen();
		$dokumen->categoryid = 6;
		$dokumen->docno = '001/HR/IX/2018';
		$dokumen->docname = 'Ketentuan Seragam';
		$dokumen->filename = 'A2.pdf';
		$dokumen->status = 2;
		$dokumen->owner = 2;
		$dokumen->save();

		$dokumen = new Dokumen();
		$dokumen->categoryid = 3;
		$dokumen->docno = '012/OPS/XI/2018';
		$dokumen->docname = 'House Rules HO ALIF';
		$dokumen->filename = 'A3.pdf';
		$dokumen->status = 1;
		$dokumen->owner = 1;
		$dokumen->save();

		$dokumen = new Dokumen();
		$dokumen->categoryid = 6;
		$dokumen->docno = '003/HR/VIII/2018';
		$dokumen->docname = 'Memo Pembacaan Doa Pagi dan Sore';
		$dokumen->filename = 'FcINIu6CIDUhrQdxYrsLpSyx0xK3UigVaN946Buz.pdf';
		$dokumen->status = 1;
		$dokumen->owner = 1;
		$dokumen->save();
    }
}
