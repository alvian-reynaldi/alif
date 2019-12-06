<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Dokumen;
use App\DocViewHistory;

class DMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index(Request $request)
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

        return view('dms.index', compact("kategoriDokumens", "dokumens"));
    }

    // public function cari(Request $request)
	// {
	// 	// menangkap data pencarian
	// 	$cari = $request->cari;
 
    // 		// mengambil data dari table dokumens sesuai pencarian data
	// 	$dokumens = DB::table('dokumens')
	// 	->where('docno','like',"%".$cari."%")
	// 	->paginate();
 
    // 		// mengirim data dokumens ke view index
	// 	return view('dms.index', compact("dokumens"));
 
	// }
    
    public function nview(Request $request, $val)
    {
        /*$q = $request->get('q');*/
        //$dokumen = DB::table('dokumens')
        //    ->select('dokumens.*')
        //    ->where('id',$val)
        //    ->get();
        $dokumen = Dokumen::findOrFail($val);
        $histories = DocViewHistory::where('docid', $dokumen->id)->paginate(20);
      
        return view('dms.nview', compact("dokumen", "histories"));
    }

    public function view(Request $request, $val)
    {
        /*$q = $request->get('q');*/
        //$dokumen = DB::table('dokumens')
        //    ->select('dokumens.*')
        //    ->where('id',$val)
        //    ->get();
        $dokumen = Dokumen::findOrFail($val);

        $dokumen->viewed = $dokumen->viewed + 1;
        $data = [];
        $data['docid'] = $dokumen->id;
        $data['viewedby'] = Auth::user()->id;

        DB::transaction(function () use ($dokumen, $data)
        {
            $dokumen->update();
            $dilihat = DocViewHistory::create($data);           
        });

        $branchs = DB::table('branches')->where('id', '=', Auth::user()->branchid)->first();
        $dataBranch = $branchs->branchcode;
        
        return view('dms.view', compact("dokumen","dataBranch"));
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
        //dd($request);
        $data = [];
        $this->validate($request, [
            'kode'  => 'required',
            'nama'  => 'required',
        ], [
            'nama.required' => 'Nama Dokumen tidak boleh kosong',
            'kode.required' => 'Nomor Dokumen tidak boleh kosong',
        ]);
       
        $data['branchcode'] = $request->branchcodes;
        $data['docno'] = $request->kode;
        $data['docname'] = $request->nama;
        $data['status'] = $request->status;
        $data['owner'] = Auth::user()->id;
        $data['categoryid'] = $request->kategori;
        $data['branchid'] = Auth::user()->branchid;
        

        $branchcodes = $request->branchcodes;
        $kode = $request->kode;
        $nama = $request->nama;
        $status = $request->status;
        $kategori = $request->kategori;
        

        $branchs = DB::table('branches')->where('id', '=', Auth::user()->branchid)->first();
        $dataBranch = $branchs->branchcode;
        
        if ($request->hasFile('filename')) {
            $data['filename'] = $this->saveDocs($request->file('filename'), $dataBranch, $kode, $nama, $status, $kategori, $branchcodes);
        }

        $dokumen = Dokumen::create($data);
       
        if($dokumen)
            Session::flash('success', 'Successfully Save!');
        else
            Session::flash('error', 'Failed Save!');

        return redirect('dms');
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
    public function edit(Request $request, $id)
    {
        /*$q = $request->get('q');*/
        $dokumen = DB::table('dokumens')
            ->select('dokumens.*')
            ->where('id',$id)
            ->get();
        
        return view('dms.edit', compact("dokumen"));
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
        $dokumen = Dokumen::find($id);
        $data = [];
        $this->validate($request, [
            'kode'  => 'required',
            'nama'  => 'required',
        ], [
            'nama.required' => 'Nama Dokumen tidak boleh kosong',
            'kode.required' => 'Nomor Dokumen tidak boleh kosong',
        ]);
        
        $data['branchcode'] = $request->branchcodes;
        $data['docno'] = $request->kode;
        $data['docname'] = $request->nama;
        $data['status'] = $request->status;
        $data['owner'] = Auth::user()->id;
        $data['categoryid'] = $request->kategori;
        $data['branchid'] = Auth::user()->branchid;
        

        $branchcodes = $request->branchcodes;
        $kode = $request->kode;
        $nama = $request->nama;
        $status = $request->status;
        $kategori = $request->kategori;
        

        $branchs = DB::table('branches')->where('id', '=', Auth::user()->branchid)->first();
        $dataBranch = $branchs->branchcode;
        
        if ($request->hasFile('filename')) {
            $data['filename'] = $this->saveDocs($request->file('filename'), $dataBranch, $kode, $nama, $status, $kategori, $branchcodes);
        }

        $dokumen->update($data);
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Data Dokumen berhasil disimpan"
        ]);

        return redirect('dms');
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

    protected function saveDocs(UploadedFile $photo, $branches, $kode, $nama, $status, $kategori)
    {
        
        $fileName = $branches.'_'.$kode.'_'.$status.'_'.$kategori. '.' . $photo->guessClientExtension();
        $destinationPath = public_path() .DIRECTORY_SEPARATOR . 'laraview'. DIRECTORY_SEPARATOR . $branches;

        if(!$destinationPath){
            File::makeDirectory($destinationPath,
            $mode = 755, true, true); 
            //$mode = 0777, true, true);
        }

        $photo->move($destinationPath, $fileName);

        $fileName = $branches.'/'.$fileName;
        return $fileName;
    }

    public function deleteDocs($filename)
    {
        $path = public_path() . DIRECTORY_SEPARATOR . 'laraview'. DIRECTORY_SEPARATOR . $filename;
        return File::delete($path);
    }
}
