<?php

use Illuminate\Database\Seeder;
use App\InventoryStock;

class InventoryStocksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inventorystock = new InventoryStock();
		

		$inventorystock = new InventoryStock();
		$inventorystock->assetid = 1;
		$inventorystock->branchid = 10;
		$inventorystock->jumlah = 85;
		$inventorystock->jumlahmin = 50;
		$inventorystock->save();

		$inventorystock = new InventoryStock();
		$inventorystock->assetid = 2;
		$inventorystock->branchid = 10;
		$inventorystock->jumlah = 75;
		$inventorystock->jumlahmin = 100;
		$inventorystock->save();

		$inventorystock = new InventoryStock();
		$inventorystock->assetid = 1;
		$inventorystock->branchid = 2;
		$inventorystock->jumlah = 31;
		$inventorystock->jumlahmin = 25;
		$inventorystock->save();

		$inventorystock = new InventoryStock();
		$inventorystock->assetid = 1;
		$inventorystock->branchid = 4;
		$inventorystock->jumlah = 24;
		$inventorystock->jumlahmin = 40;
		$inventorystock->save();

		$inventorystock = new InventoryStock();
		$inventorystock->assetid = 2;
		$inventorystock->branchid = 2;
		$inventorystock->jumlah = 12;
		$inventorystock->jumlahmin = 20;
		$inventorystock->save();

		$inventorystock = new InventoryStock();
		$inventorystock->assetid = 4;
		$inventorystock->branchid = 3;
		$inventorystock->jumlah = 23;
		$inventorystock->jumlahmin = 20;
		$inventorystock->save();

		$inventorystock = new InventoryStock();
		$inventorystock->assetid = 5;
		$inventorystock->branchid = 1;
		$inventorystock->jumlah = 13;
		$inventorystock->jumlahmin = 15;
		$inventorystock->save();

		$inventorystock = new InventoryStock();
		$inventorystock->assetid = 3;
		$inventorystock->branchid = 1;
		$inventorystock->jumlah = 8;
		$inventorystock->jumlahmin = 12;
		$inventorystock->save();

        $inventorystock = new InventoryStock();
		$inventorystock->assetid = 3;
		$inventorystock->branchid = 3;
		$inventorystock->jumlah = 13;
		$inventorystock->jumlahmin = 10;
		$inventorystock->save();
    }
}
