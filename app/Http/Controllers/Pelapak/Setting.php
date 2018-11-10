<?php

namespace App\Http\Controllers\pelapak;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Session;
use Image;

use App\Models\ProfilPelapak;

class Setting extends Controller
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
        $setting = ProfilPelapak::findorfail($pelapak_id);
        return view('pelapak/setting/edit', compact('setting'));
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
        $setting = ProfilPelapak::findorfail($id);

        $this->validate($request, [
            'telepon'      => 'numeric',
            'gambar'    => 'sometimes|image|max:1000|mimes:jpeg,jpg,bmp,png'
        ]);

        $setting->nama = $request->nama;
        $setting->alamat = $request->alamat;
        $setting->telepon = $request->telepon;
        $setting->email = $request->email;
        $setting->teks = $request->teks;
        $setting->pelapak_id = $id;
        if($request->hasFile('gambar')) {
            $setting->gambar = $this->UploadGambar($request, $setting->nama);
        }

        $setting->save();

        Session::flash('pesan_sukses', 'Data Setting Lapak berhasil di perbarui');

        return redirect('pelapak/setting/');
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
        $setting = ProfilPelapak::findorfail($id);

        if(file_exists(public_path('upload/setting/kecil/').$setting->gambar)) {
            unlink(public_path('upload/setting/kecil/').$setting->gambar);
        }

        if(file_exists(public_path('upload/setting/sedang/').$setting->gambar)) {
            unlink(public_path('upload/setting/sedang/').$setting->gambar);
        }

        $setting->gambar = "";
        Session::flash('pesan_sukses', 'Gambar berhasil di hapus');
        $setting->save();

        return redirect('pelapak/setting');
    }

    private function UploadGambar(Request $request, $link)
    {
        $gambar = $request->file('gambar');
        $ext    = $gambar->getClientOriginalExtension();

        if($request->file('gambar')->isValid()) {

            $gambar_nama = $link . ".$ext";
            $upload_path = "upload/setting/kecil";
            $upload_path2 = "upload/setting/sedang";
            $request->file('gambar')->move($upload_path, $gambar_nama);
            
            copy($upload_path. "/" .$gambar_nama, $upload_path2. "/" .$gambar_nama);

            $imgkecil = Image::make($upload_path. "/" .$gambar_nama);
            $imgkecil->fit(400, 300);
            $imgkecil->save();

            $imgsedang = Image::make($upload_path2. "/" .$gambar_nama);
            $imgsedang->fit(700, 400);
            $imgsedang->save();

            return $gambar_nama;
        }
        return false;
    }

}
