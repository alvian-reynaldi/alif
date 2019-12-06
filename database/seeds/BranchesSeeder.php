<?php

use Illuminate\Database\Seeder;
use App\Branch;

class BranchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branch = new Branch();
		$branch->branchcode = "20400";
		$branch->branchname = 'Kudus';
		$branch->branchtype = 1;
		$branch->address = 'Ruko Ronggolawe, Jl. Ronggolawe No. 6 A, Kudus';
		$branch->save();

		$branch = new Branch();
		$branch->branchcode = "20500";
		$branch->branchname = 'Purwokerto';
		$branch->branchtype = 1;
		$branch->address = 'Kantor Bank Muamalat, Ruko Satria Plasa Blok A 4-5';
		$branch->save();

		$branch = new Branch();
		$branch->branchcode = "10600";
		$branch->branchname = 'Karawang';
		$branch->branchtype = 1;
		$branch->address = 'Komplek Ruko Galuh Mas, Jl. Galuh Mas Raya';
		$branch->save();

		$branch = new Branch();
		$branch->branchcode = "60300";
		$branch->branchname = 'Balikpapan';
		$branch->branchtype = 1;
		$branch->address = 'Jl. Marsma R. Iswahyudi No. 05 Rt 57';
		$branch->save();

		$branch = new Branch();
		$branch->branchcode = "60400";
		$branch->branchname = 'Martapura';
		$branch->branchtype = 2;
		$branch->address = 'Jl. Ahmad Yani Km. 39,5 Martapura Kabupaten Banjar';
		$branch->save();

		$branch = new Branch();
		$branch->branchcode = "40400";
		$branch->branchname = 'Tanjung Pinang';
		$branch->branchtype = 1;
		$branch->address = 'Jl. DI. Panjaitan Blok A No. 3/3A';
		$branch->save();

		$branch = new Branch();
		$branch->branchcode = "10700";
		$branch->branchname = 'Tangerang';
		$branch->branchtype = 1;
		$branch->address = 'Jl. Merdeka 101 Tangerang';
		$branch->save();

		$branch = new Branch();
		$branch->branchcode = "70100";
		$branch->branchname = 'Makassar';
		$branch->branchtype = 1;
		$branch->address = 'JL. A.P.Pettarani Ruko No.10 D Makassar';
		$branch->save();

		$branch = new Branch();
		$branch->branchcode = "10800";
		$branch->branchname = 'Serang';
		$branch->branchtype = 1;
		$branch->address = 'Jl. KH Washid Lontar Baru - Kepandaian -Serang';
		$branch->save();

		$branch = new Branch();
		$branch->branchcode = "00001";
		$branch->branchname = 'HEAD OFFICE';
		$branch->branchtype = 1;
		$branch->address = 'Gd. Arthaloka Lt. 1, Jl. Jend. Sudirman Kav. 2';
		$branch->save();

		$branch = new Branch();
		$branch->branchcode = "10200";
		$branch->branchname = 'Jakarta 2';
		$branch->branchtype = 1;
		$branch->address = 'Jl.Raden Inten II No 4,RT008/015,Kel.DurenSawit';
		$branch->save();

		$branch = new Branch();
		$branch->branchcode = "10300";
		$branch->branchname = 'Bandung';
		$branch->branchtype = 1;
		$branch->address = 'Jl Soekarno Hatta no 575 G, Bandung';
		$branch->save();

		$branch = new Branch();
		$branch->branchcode = "10400";
		$branch->branchname = 'Bogor';
		$branch->branchtype = 1;
		$branch->address = 'Ruko Simpang Yasmin, Jl. KH. Soleh Iskandar No. 10';
		$branch->save();

		$branch = new Branch();
		$branch->branchcode = "20100";
		$branch->branchname = 'Yogyakarta';
		$branch->branchtype = 1;
		$branch->address = 'Jl. Kapt. Piere Tendean 56 A, Kel. Wirobrajan';
		$branch->save();

		$branch = new Branch();
		$branch->branchcode = "20200";
		$branch->branchname = 'Semarang';
		$branch->branchtype = 1;
		$branch->address = 'Jl. Soekarno Hatta No. 9 A, Kel. Tlogosari Kulon';
		$branch->save();

		$branch = new Branch();
		$branch->branchcode = "30100";
		$branch->branchname = 'Surabaya 1';
		$branch->branchtype = 1;
		$branch->address = 'Jl. Mayjend Sungkono no. 107, Kel. Dukuh Pakis, Ke';
		$branch->save();

		$branch = new Branch();
		$branch->branchcode = "10500";
		$branch->branchname = 'Bekasi';
		$branch->branchtype = 1;
		$branch->address = 'Ruko Suncity Square Blok A-26 Bekasi';
		$branch->save();

		$branch = new Branch();
		$branch->branchcode = "40100";
		$branch->branchname = 'Medan';
		$branch->branchtype = 1;
		$branch->address = 'Jl. Guru Patimpus No. 1 L, Desa Kesawan,';
		$branch->save();
    }
}
