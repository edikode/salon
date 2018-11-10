<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;
use App\Models\PelapakModel;

class Pelapak extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filter = "";
        $keyword = "";
        $pelapak = PelapakModel::paginate(10);
        return view('admin/pelapak/home', compact('filter','keyword','pelapak'));
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelapak = PelapakModel::findorfail($id);
        return view('admin/pelapak/show', compact('pelapak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $pelapak = PelapakModel::findorfail($id);

        $pelapak->status = $request->status;

        $pelapak->save();

        Session::flash('pesan_sukses', 'Data Pelapak berhasil di perbarui');

        return redirect('admin/pelapak/'.$pelapak->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelapak = PelapakModel::findorfail($id);

        if($pelapak->gambar != ""){
            if(file_exists(public_path('upload/pelapak/kecil/').$pelapak->gambar)) {
                echo "string";
                unlink(public_path('upload/pelapak/kecil/').$pelapak->gambar);
            }
            if(file_exists(public_path('upload/pelapak/sedang/').$pelapak->gambar)) {
                unlink(public_path('upload/pelapak/sedang/').$pelapak->gambar);
            }
        }

        $pelapak->delete();
        Session::flash('pesan_sukses', 'Data '. $pelapak->nama .' Berhasil Dihapus');
        
        return redirect('admin/pelapak');
    }

    public function cari(Request $request)
    {
        $filter = $request->filter;
        $keyword = $request->keyword;

        if($filter == ""){
            
            $pelapak =  PelapakModel::paginate(10);
        } else {

            if($filter == "nama"){
                $pelapak =  PelapakModel::where('nama', 'LIKE', '%' . $keyword . '%')
                                ->paginate(10);
            } elseif($filter == "alamat") {
                $pelapak =  PelapakModel::where('alamat', 'LIKE', '%' . $keyword . '%')
                                ->paginate(10);
            }
        }

        return view('admin/pelapak/home', compact('pelapak','filter','keyword'));
    }

}
