<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;
use App\Models\PelangganModel;

class Pelanggan extends Controller
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
        $pelanggan = PelangganModel::paginate(10);
        return view('admin/pelanggan/home', compact('filter','keyword','pelanggan'));
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
        $pelanggan = PelangganModel::findorfail($id);
        return view('admin/pelanggan/show', compact('pelanggan'));
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
        $pelanggan = PelangganModel::findorfail($id);

        $pelanggan->status = $request->status;

        $pelanggan->save();

        Session::flash('pesan_sukses', 'Data Pelanggan berhasil di perbarui');

        return redirect('admin/pelanggan/'.$pelanggan->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggan = PelangganModel::findorfail($id);

        if($pelanggan->gambar != ""){
            if(file_exists(public_path('upload/pelanggan/kecil/').$pelanggan->gambar)) {
                echo "string";
                unlink(public_path('upload/pelanggan/kecil/').$pelanggan->gambar);
            }
            if(file_exists(public_path('upload/pelanggan/sedang/').$pelanggan->gambar)) {
                unlink(public_path('upload/pelanggan/sedang/').$pelanggan->gambar);
            }
        }

        $pelanggan->delete();
        Session::flash('pesan_sukses', 'Data '. $pelanggan->nama .' Berhasil Dihapus');
        
        return redirect('admin/pelanggan');
    }

    public function cari(Request $request)
    {
        $filter = $request->filter;
        $keyword = $request->keyword;

        if($filter == ""){
            
            $pelanggan =  PelangganModel::paginate(10);
        } else {

            if($filter == "nama"){
                $pelanggan =  PelangganModel::where('nama', 'LIKE', '%' . $keyword . '%')
                                ->paginate(10);
            } elseif($filter == "alamat") {
                $pelanggan =  PelangganModel::where('alamat', 'LIKE', '%' . $keyword . '%')
                                ->paginate(10);
            }
        }

        return view('admin/pelanggan/home', compact('pelanggan','filter','keyword'));
    }

}
