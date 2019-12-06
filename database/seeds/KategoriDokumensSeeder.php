<?php

use Illuminate\Database\Seeder;
use App\KategoriDokumen;

class KategoriDokumensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategoriDokumen = new KategoriDokumen();
		$kategoriDokumen->categorycode = "FIN";
		$kategoriDokumen->categoryname = 'Financing';
		$kategoriDokumen->save();

		$kategoriDokumen = new KategoriDokumen();
		$kategoriDokumen->categorycode = "FINA";
		$kategoriDokumen->categoryname = 'Finance & Accounting';
		$kategoriDokumen->save();

		$kategoriDokumen = new KategoriDokumen();
		$kategoriDokumen->categorycode = "OPS";
		$kategoriDokumen->categoryname = 'Operation';
		$kategoriDokumen->save();

		$kategoriDokumen = new KategoriDokumen();
		$kategoriDokumen->categorycode = "SAL";
		$kategoriDokumen->categoryname = 'Sales';
		$kategoriDokumen->save();

		$kategoriDokumen = new KategoriDokumen();
		$kategoriDokumen->categorycode = "MKT";
		$kategoriDokumen->categoryname = 'Marketing';
		$kategoriDokumen->save();

		$kategoriDokumen = new KategoriDokumen();
		$kategoriDokumen->categorycode = "HR";
		$kategoriDokumen->categoryname = 'Human Resource';
		$kategoriDokumen->save();
    }
}
