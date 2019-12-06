<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Dokumen;
use App\DocViewHistory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /*$q = $request->get('q');*/
        $level =  Auth::user()->level;
        $id =  Auth::user()->id;
        $branchid =  Auth::user()->branchid;
        $kategoriDokumens = DB::table('kategori_dokumens')
            ->select('kategori_dokumens.*')
            ->paginate(10);
        $query = DB::table('dokumens')
            ->select('dokumens.id', 'dokumens.docno', 'dokumens.docname', 'kat.categoryname',
             'dokumens.status', 'dokumens.viewed', 'dokumens.owner')
            ->leftJoin('kategori_dokumens AS kat', 'kat.id', '=', 'dokumens.categoryid');    

        if($level <= 10)
            $dokumens =  $query->orderBy('dokumens.id', 'desc')->paginate(50);
        
        else
            $dokumens =  $query->orderBy('dokumens.id', 'desc')->where('branchid',$branchid)->paginate(10);
        
       
        $tab2 = ''; $tab1 = 'active';

        return view('dms.index', compact("kategoriDokumens", "dokumens", "tab1", "tab2"));
    }
}
