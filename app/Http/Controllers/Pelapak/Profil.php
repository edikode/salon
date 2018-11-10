<?php

namespace App\Http\Controllers\pelapak;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Session;
use Image;

use App\Models\PelapakModel;

class Profil extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:pelapak');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelapak_id = Auth::user()->id;
        $profil = PelapakModel::findorfail($pelapak_id);
        return view('pelapak/profil/edit', compact('profil'));
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
        $profil = PelapakModel::findorfail($id);

        $this->validate($request, [
            'telepon'      => 'numeric',
            'gambar'    => 'sometimes|image|max:1000|mimes:jpeg,jpg,bmp,png'
        ]);

        $profil->nama = $request->nama;
        $profil->telepon = $request->telepon;
        $profil->tempat_lahir = $request->tempat_lahir;
        $profil->tanggal_lahir = $request->tanggal_lahir;
        $profil->alamat = $request->alamat;
        $profil->status = $request->status;
        if($request->hasFile('gambar')) {
            $profil->gambar = $this->UploadGambar($request, $profil->nama);
        }

        $profil->save();

        Session::flash('pesan_sukses', 'Data profil Lapak berhasil di perbarui');

        return redirect('pelapak/profil-pelapak/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    public function hapusgambar($id)
    {
        $profil = PelapakModel::findorfail($id);

        if(file_exists(public_path('upload/pelapak/kecil/').$profil->gambar)) {
            unlink(public_path('upload/pelapak/kecil/').$profil->gambar);
        }

        if(file_exists(public_path('upload/pelapak/sedang/').$profil->gambar)) {
            unlink(public_path('upload/pelapak/sedang/').$profil->gambar);
        }

        $profil->gambar = "";
        Session::flash('pesan_sukses', 'Gambar berhasil di hapus');
        $profil->save();

        return redirect('pelapak/profil-pelapak');
    }

    private function UploadGambar(Request $request, $link)
    {
        $gambar = $request->file('gambar');
        $ext    = $gambar->getClientOriginalExtension();

        if($request->file('gambar')->isValid()) {

            $gambar_nama = $link . ".$ext";
            $upload_path = "upload/pelapak/kecil";
            $upload_path2 = "upload/pelapak/sedang";
            $request->file('gambar')->move($upload_path, $gambar_nama);
            
            copy($upload_path. "/" .$gambar_nama, $upload_path2. "/" .$gambar_nama);

            $imgkecil = Image::make($upload_path. "/" .$gambar_nama);
            $imgkecil->fit(300, 300);
            $imgkecil->save();

            $imgsedang = Image::make($upload_path2. "/" .$gambar_nama);
            $imgsedang->fit(700, 400);
            $imgsedang->save();

            return $gambar_nama;
        }
        return false;
    }

}
