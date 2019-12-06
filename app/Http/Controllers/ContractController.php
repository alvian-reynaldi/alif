<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Pagination\LengthAwarePaginator;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->get('q');
        
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 40;
    
        $minrow = ($currentPage-1) * $perPage + 1;
        $maxrow = $currentPage * $perPage;
        
        //**** count data ************//
        $sql = "SELECT count(*) as ndata
                FROM AR_TRN_SUM_CONTRACTS ";
        $nresult = DB::connection('oracle')
                ->select($sql);
        $ndata = $nresult[0]->ndata;
        //**** end count data *********//


        //**** data query  **********//
        
        $sql = "SELECT * 
                FROM AR_TRN_SUM_CONTRACTS ";
        $pagesql = "SELECT * 
                    FROM (
                            SELECT a.*, rownum as rnum from ($sql) a
                            WHERE ROWNUM <= $maxrow) 
                    WHERE rnum >= $minrow";

        //**** END data query  **********//

        $aproducts = DB::connection('oracle')
          ->select($pagesql);
        //$total = count($products);
        $products = collect($aproducts);
        //$currentResults = $products->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $currentResults = $products->all();
        $ledgers1 = new LengthAwarePaginator($currentResults, $ndata, $perPage);
        
        return view('financing.contract', compact("ledgers1","q"));
    }

    public function indexJaminan(Request $request)
    {
        $q = $request->get('q');
        
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 40;
    
        $minrow = ($currentPage-1) * $perPage + 1;
        $maxrow = $currentPage * $perPage;
        
        //**** count data ************//
        $sql = "SELECT count(*) as ndata
                FROM ar_rpt_ovd_constant_data_tmp ";
        $nresult = DB::connection('oracle')
                ->select($sql);
        $ndata = $nresult[0]->ndata;
        //**** end count data *********//

        //**** data query  **********//
        
        $sql = "SELECT * 
                FROM ar_rpt_ovd_constant_data_tmp ";
        $pagesql = "SELECT * 
                    FROM (
                            SELECT a.*, rownum as rnum from ($sql) a
                            WHERE ROWNUM <= $maxrow) 
                    WHERE rnum >= $minrow";

        //**** END data query  **********//

        $aproducts = DB::connection('oracle')
          ->select($pagesql);
        //$total = count($products);
        $products = collect($aproducts);
        //$currentResults = $products->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $currentResults = $products->all();
        $ledgers1 = new LengthAwarePaginator($currentResults, $ndata, $perPage);
        
        return view('financing.jaminan.bpkb', compact("ledgers1","q"));
    }

    public function rinciJaminan(Request $request, $id)
    {
        
        //**** data query  **********//        
        $sql = "SELECT * 
                FROM ar_rpt_ovd_constant_data_tmp 
                WHERE contract_no = '$id'";

        //**** END data query  **********//

        $akontrak = DB::connection('oracle')
          ->select($sql);
        $kontrak = collect($akontrak)->first();
        //dd($kontrak);
        
        return view('financing.jaminan.rinci', compact("kontrak"));
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
