<?php

namespace App\Exports;

use App\InventoryOrder;
//use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

//class OrdersExport implements FromCollection
class OrdersExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return InventoryOrder::all();
    }

    public function view(): View
    {
        return view('ga._indexOrder', [
            'inventoryorders' => InventoryOrder::all()
        ]);
    }
}
