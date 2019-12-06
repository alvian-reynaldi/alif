<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Branch;
use Illuminate\Pagination\LengthAwarePaginator;


class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->get('q');
        
        //$branches = DB::table('branches')
        //    ->select('branches.*')
        //    ->paginate(20);
        
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 20;

        $sql = "SELECT * 
                FROM FS_MST_OFFICES ";

        $abranches = DB::connection('oracle')
          ->select($sql);
        //$total = count($products);
        $cbranches = collect($abranches);
        $currentResults = $cbranches->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $branches = new LengthAwarePaginator($currentResults, $cbranches->count(), $perPage);

        return view('branch.index',compact('branches','q'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('branch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [];
        $this->validate($request, [
            'kode'  => 'required',
            'nama'  => 'required',
        ], [
            'nama.required' => 'Nama Kantor Cabang tidak boleh kosong',
            'kode.required' => 'Nama Kode Cabang tidak boleh kosong',
        ]);
        
        $data['branchname'] = $request->nama;
        $data['address'] = $request->address;
        $data['branchtype'] = $request->tipe;
        if (isset($request->kode)) $data['branchcode'] = $request->kode;

        $branch = Branch::create($data);
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Data Branch berhasil disimpan"
        ]);

        return redirect('admin/branch');
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
        $branch = Branch::findOrFail($id);
        return view('branch.edit', compact('branch'));
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
        //dd($request);
        $branch = Branch::findOrFail($id);

        $data = [];
        $this->validate($request, [
            'kode'  => 'required',
            'nama'  => 'required',
        ], [
            'nama.required' => 'Nama Kantor Cabang tidak boleh kosong',
            'kode.required' => 'Nama Kode Cabang tidak boleh kosong',
        ]);
        
        $data['branchname'] = $request->nama;
        $data['address'] = $request->address;
        $data['branchtype'] = $request->tipe;
        if (isset($request->kode)) $data['branchcode'] = $request->kode;

        $branch->update($data);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Data Branch berhasil disimpan"
        ]);

        return redirect('admin/branch');
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
