<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Asset;
use App\Branch;
use App\KategoriAsset;
use App\InventoryStock;
use App\InventoryOrder;
use App\Exports\OrdersExport;
use Maatwebsite\Excel\Facades\Excel;


class GAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
    }

    public function procurement(Request $request)
    {
        $q = $request->get('q');
        //dd($request);
        $kebutuhans = DB::table('kebutuhans')
            ->select('kebutuhans.*')
            ->paginate(20);
               
        return view('ga.procurement', compact("q","kebutuhans"));
    }

    public function inventory(Request $request)
    {
        //dd($request);
        $q = $request->get('q');
        $cabang = 0;

        $arr_where = [];
        if ($request->has('cabang') && $request->get('cabang') != "")
        {
            $cabang = $request->get('cabang');
            $arr_where[] = ['branchid', $request->get('cabang')];
        }

        $kategoriAssets = DB::table('kategori_assets')
            ->select('kategori_assets.*')
            ->paginate(20);

        $assets = DB::table('assets')
            ->select('assets.*')
            //->where($arr_where)
            ->paginate(20);
        
        return view('ga.inventory', compact("q","kategoriAssets", "assets", "cabang"));
    }

    public function inventoryOrder(Request $request, $id, $id2)
    {

        $asset  = Asset::findOrFail($id);
        $inventorystock = InventoryStock::where('branchid',$id2)->where('assetid',$id)->first();
        $cabang = $id2;
        
        return view('ga.inventory-order', compact("asset","inventorystock","cabang"));
    }

    public function inventoryOrderStore(Request $request)
    {
        //dd($request);
        $data = [];
        $data['assetid'] = $request->id;
        $data['branchid'] = $request->cabang;
        $data['jumlah'] = $request->jumlahorder;
        $data['pengentri'] = Auth::user()->id;
        $data['waktuentri'] = now();
        $data['status'] = 1;

        $order  = InventoryOrder::create($data);
        $inventoryorders = DB::table('inventory_orders')
            ->select('inventory_orders.*')
            ->paginate(20);
        $cabang = $request->cabang;
        
        return view('ga.inventory-order-view', compact("cabang","inventoryorders"));
    }

    public function inventoryOrderView(Request $request)
    {
        //dd($request);
        $q = $request->get('q');
        $cabang = 0;

        $arr_where = [];
        $arr_where1 = [];

        if ($request->has('cabang') && $request->get('cabang') != "")
        {
            $cabang = $request->get('cabang');
            $arr_where[] = ['branchid', $request->get('cabang')];
        }

        if (Auth::user()->roles[0]->name == "gscab" || Auth::user()->roles[0]->name == "bm")
            $arr_where1[] = ["branchid",Auth::user()->branchid];

        $assets = DB::table('assets')
            ->select('assets.*')
            //->where($arr_where)
            ->paginate(20);

        $inventoryorders = DB::table('inventory_orders')
            ->select('inventory_orders.*')
            ->where($arr_where1)
            ->paginate(20);

        return view('ga.inventory-order-view', compact("q","assets", "cabang","inventoryorders"));
    }

    public function inventoryOrderReview(Request $request, $id)
    {
        
        $inventoryorder = InventoryOrder::findOrFail($id);
        //dd($inventoryorder);
        
        return view('ga.inventory.order-review', compact("inventoryorder"));
    }

    public function inventoryOrderEndorse(Request $request, $id)
    {
        
        $inventoryorder = InventoryOrder::findOrFail($id);
        $asset = Asset::findOrFail($inventoryorder->assetid);
        $inventorystock = InventoryStock::where("branchid",Auth::user()->branchid)->where("assetid",$inventoryorder->assetid)->first();
        //dd($inventoryorder);
        
        return view('ga.inventory.order-endorse', compact("inventoryorder","asset","inventorystock","id"));
    }

    public function inventoryOrderPostEndorse(Request $request)
    {
        dd($request);

        $data = [];

        if ($request->setuju == "Setuju") {
            $data["status"] = 2;
        }
        else {
            $data["status"] = 3;
        }

        $data["endorsenote"] = $request->catatan;
        $data["endorser"] = Auth::user()->id;
        $inventoryorder = InventoryOrder::findOrFail($request->id);
        $inventoryorder->update(['endorsenote'=>$request->catatan]);
        $cabang = Auth::user()->branchid;

        $arr_where1 = [];
        if (Auth::user()->roles[0]->name == "gscab" || Auth::user()->roles[0]->name == "bm")
            $arr_where1[] = ["branchid",$cabang];

        $assets = DB::table('assets')
            ->select('assets.*')
            //->where($arr_where)
            ->paginate(20);

        $inventoryorders = DB::table('inventory_orders')
            ->select('inventory_orders.*')
            ->where($arr_where1)
            ->paginate(20);
        
        return view('ga.inventory.order.view', compact("assets", "cabang","inventoryorders"));
    }

    public function inventoryOrderExport(Request $request)
    {
        return Excel::download(new OrdersExport, 'orders.xlsx');
    }

    public function inventoryKategoriIndex(Request $request)
    {
        $kategoriAssets = DB::table('kategori_assets')
            ->select('kategori_assets.*')
            ->paginate(20);
        
        return view('ga.setting.kategori-index', compact("kategoriAssets"));
    }

    public function inventoryKategoriCreate()
    {
        return view('ga.setting.kategori-create');
    }

    public function inventoryKategoriStore(Request $request)
    {
        //dd($request);
        $data = [];
        $this->validate($request, [
            'kode'  => 'required',
            'kategori'  => 'required',
        ], [
            'kategori.required' => 'Nama Kategori tidak boleh kosong',
            'kode.required' => 'Kode Kategori tidak boleh kosong',
        ]);
        
        $data['categorycode'] = $request->kode;
        $data['categoryname'] = $request->kategori;

        $kategoriasset = KategoriAsset::create($data);
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Data Kategori Asset berhasil disimpan"
        ]);
      
        return redirect('inventory/kategori');
    }

    public function inventoryKategoriEdit(Request $request, $id)
    {
        $kategori = KategoriAsset::findOrFail($id);
        return view('ga.setting.kategori-edit', compact("kategori"));
    }

    public function inventoryKategoriUpdate(Request $request, $id)
    {
        //dd($request);
        $kategori = KategoriAsset::findOrFail($id);
        $data = [];
        $this->validate($request, [
            'kode'  => 'required',
            'kategori'  => 'required',
        ], [
            'kategori.required' => 'Nama Kategori tidak boleh kosong',
            'kode.required' => 'Kode Kategori tidak boleh kosong',
        ]);
        
        $data['categorycode'] = $request->kode;
        $data['categoryname'] = $request->kategori;

        $kategori->update($data);
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Data Kategori Asset berhasil disimpan"
        ]);
      
        return redirect('inventory/kategori');
    }

    public function inventoryBarangIndex(Request $request)
    {

        $kategoriAssets = DB::table('kategori_assets')
            ->select('kategori_assets.*')
            ->paginate(20);

        $assets = DB::table('assets')
            ->select('assets.*')
            //->where($arr_where)
            ->paginate(20);
        
        return view('ga.setting.barang-index', compact("kategoriAssets","assets"));
    }

    public function inventoryBarangCreate()
    {
        return view('ga.setting.barang-create');
    }

    public function inventoryBarangStore(Request $request)
    {
        //dd($request);
        $data = [];
        $this->validate($request, [
            'kode'  => 'required',
            'nama'  => 'required',
        ], [
            'nama.required' => 'Nama Barang tidak boleh kosong',
            'kode.required' => 'Kode Kategori tidak boleh kosong',
        ]);
        
        $data['assetcode'] = $request->kode;
        $data['categoryid'] = $request->kategori;
        $data['assetname'] = $request->nama;
        $data['satuan'] = $request->satuan;

        $barang = Asset::create($data);
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Data Barang berhasil disimpan"
        ]);
      
        return redirect('inventory/barang');
    }

    public function inventoryBarangEdit(Request $request, $id)
    {
        $asset = Asset::findOrFail($id);
        return view('ga.setting.barang-edit', compact("asset"));
    }

    public function inventoryBarangUpdate(Request $request, $id)
    {
        //dd($request);
        $asset = Asset::findOrFail($id);
        $data = [];
        $this->validate($request, [
            'kode'  => 'required',
            'nama'  => 'required',
        ], [
            'nama.required' => 'Nama Barang tidak boleh kosong',
            'kode.required' => 'Kode Kategori tidak boleh kosong',
        ]);
        
        $data['assetcode'] = $request->kode;
        $data['categoryid'] = $request->kategori;
        $data['assetname'] = $request->nama;
        $data['satuan'] = $request->satuan;

        $asset->update($data);
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Data Asset berhasil disimpan"
        ]);
      
        return redirect('inventory/barang');
    }

    public function inventoryBarangCabang(Request $request, $id)
    {
        $asset = Asset::findOrFail($id);
        $branches = DB::table('branches')
            ->select('branches.*')
            ->paginate(20);

        return view('ga.setting.barang-cabang', compact("asset", "branches"));
    }

    public function inventoryBarangCabangEdit(Request $request, $bid, $aid)
    {
        //dd($aid.'-'.$bid);
        $asset = Asset::findOrFail($aid);
        $branch = Branch::findOrFail($bid);
        $inventorystock = InventoryStock::where('branchid', $bid)->where('assetid',$aid)->first();
        //dd($inventorystock);

        return view('ga.setting.barang-cabang-edit', compact("asset", "branch", "inventorystock"));
    }

    public function inventoryBarangCabangUpdate(Request $request)
    {
        //dd($request);
        $stock = InventoryStock::firstOrCreate(['assetid'=>$request->assetid, 'branchid'=>$request->branchid]);
        $data = [];
        $this->validate($request, [
            'jumlahmin'  => 'required',
        ], [
            'jumlahmin.required' => 'Nilai minimum jumlah persediaan tidak boleh kosong',
        ]);
        
        $data['jumlahmin'] = $request->jumlahmin;
        $stock->update($data);
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Data Parameter Persediaan Cabang berhasil disimpan"
        ]);
      
        return redirect('inventory/barang/cabang/'.$request->assetid);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
