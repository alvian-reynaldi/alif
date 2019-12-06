<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat role admin
		$adminRole = new Role();
		$adminRole->name = "admin";
		$adminRole->display_name = "Admin";
		$adminRole->save();

		// Membuat role BOD
		$bodRole = new Role();
		$bodRole->name = "bod";
		$bodRole->display_name = "BOD";
		$bodRole->save();

		// Membuat role finance & accounting
		$faRole = new Role();
		$faRole->name = "fa";
		$faRole->display_name = "Finance & Accounting";
		$faRole->save();

		// Membuat role GS Pusat
		$gshRole = new Role();
		$gshRole->name = "gsho";
		$gshRole->display_name = "GS Kantor Pusat";
		$gshRole->save();

		// Membuat role GS Cabang
		$gscRole = new Role();
		$gscRole->name = "gscab";
		$gscRole->display_name = "GS Cabang";
		$gscRole->save();

		// Membuat role BM
		$bmRole = new Role();
		$bmRole->name = "bm";
		$bmRole->display_name = "BM Cabang";
		$bmRole->save();

		// Membuat sample admin
		$admin = new User();
		$admin->name = 'Admin ALIF Portal';
		$admin->email = 'admin.alif@alif.com';
		$admin->password = bcrypt('Rahasia~123');
		$admin->branchid = 10;
		$admin->save();
		$admin->attachRole($adminRole);

		// Membuat sample BOD
		$bod = new User();
		$bod->name = "Direktur Utama";
		$bod->email = 'dirut@alif.com';
		$bod->password = bcrypt('Rahasia~123');
		$bod->branchid = 10;
		$bod->save();
		$bod->attachRole($bodRole);

		// Membuat sample FA
		$fa = new User();
		$fa->name = "Accounting Staff";
		$fa->email = 'accounting@alif.com';
		$fa->password = bcrypt('Rahasia~123');
		$fa->branchid = 10;
		$fa->save();
		$fa->attachRole($faRole);

		// Membuat sample GS Kantor Pusat
		$gsh = new User();
		$gsh->name = "GS Kantor Pusat";
		$gsh->email = 'gsho@alif.com';
		$gsh->password = bcrypt('Rahasia~123');
		$gsh->branchid = 10;
		$gsh->save();
		$gsh->attachRole($gshRole);

		// Membuat sample GS Cabang
		$gsc = new User();
		$gsc->name = "GS Cabang Kudus";
		$gsc->email = 'gsckds@alif.com';
		$gsc->password = bcrypt('Rahasia~123');
		$gsc->branchid = 1;
		$gsc->save();
		$gsc->attachRole($gscRole);

		$gsc = new User();
		$gsc->name = "GS Cabang Purwokerto";
		$gsc->email = 'gspwk@alif.com';
		$gsc->password = bcrypt('Rahasia~123');
		$gsc->branchid = 2;
		$gsc->save();
		$gsc->attachRole($gscRole);

		$gsc = new User();
		$gsc->name = "GS Cabang Karawang";
		$gsc->email = 'gskrw@alif.com';
		$gsc->password = bcrypt('Rahasia~123');
		$gsc->branchid = 3;
		$gsc->save();
		$gsc->attachRole($gscRole);

		// Membuat sample BM Cabang
		$bm = new User();
		$bm->name = "BM Cabang Kudus";
		$bm->email = 'bmkds@alif.com';
		$bm->password = bcrypt('Rahasia~123');
		$bm->branchid = 1;
		$bm->save();
		$bm->attachRole($bmRole);

		$bm = new User();
		$bm->name = "BM Cabang Purwokerto";
		$bm->email = 'bmpwk@alif.com';
		$bm->password = bcrypt('Rahasia~123');
		$bm->branchid = 2;
		$bm->save();
		$bm->attachRole($bmRole);

		$bm = new User();
		$bm->name = "BM Cabang Karawang";
		$bm->email = 'bmkrw@alif.com';
		$bm->password = bcrypt('Rahasia~123');
		$bm->branchid = 3;
		$bm->save();
		$bm->attachRole($bmRole);


    }
}
