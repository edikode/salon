<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Session;
use Image;
use Illuminate\Support\Str;

use App\Models\ProfilWeb;

class Profil extends Controller
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
        $profil = ProfilWeb::all();
        return view('admin/profil/home', compact('profil'));
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
        $profil = new ProfilWeb;

        $this->validate($request, [
            'nama'      => 'required',
            'nama'      => 'required|unique:profil_web,link,'.$profil['id'],
            'gambar'    => 'sometimes|image|max:1000|mimes:jpeg,jpg,bmp,png'
        ]);

        $profil->nama = $request->nama;
        $profil->link = Str::slug($request->nama);
        $profil->deskripsi = $request->deskripsi;
        $profil->teks = $request->teks;
        $profil->admin_id = Auth::user()->id;
        if($request->hasFile('gambar')) {
            $profil->gambar = $this->UploadGambar($request, $profil->link);
        }

        $profil->save();

        Session::flash('pesan_sukses', 'Data Profil Aplikasi berhasil di perbarui');

        return redirect('admin/profil');
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
        $profil = ProfilWeb::findorfail($id);
        return view('admin/profil/edit', compact('profil'));
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
        $profil = ProfilWeb::findorfail($id);

        $this->validate($request, [
            'nama'      => 'required',
            'link'      => 'unique:profil_web,link,'.$profil['id'],
            'gambar'    => 'sometimes|image|max:1000|mimes:jpeg,jpg,bmp,png'
        ]);

        $profil->nama = $request->nama;
        $profil->link = Str::slug($request->link);
        $profil->deskripsi = $request->deskripsi;
        $profil->teks = $request->teks;
        $profil->admin_id = Auth::user()->id;
        if($request->hasFile('gambar')) {
            $profil->gambar = $this->UploadGambar($request, $profil->link);
        }

        $profil->save();

        Session::flash('pesan_sukses', 'Data Profil Aplikasi berhasil di perbarui');

        return redirect('admin/profil/'.$profil->id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profil = ProfilWeb::findorfail($id);

        if($profil->gambar != ""){
            if(file_exists(public_path('upload/profil/kecil/').$profil->gambar)) {
                echo "string";
                unlink(public_path('upload/profil/kecil/').$profil->gambar);
            }
            if(file_exists(public_path('upload/profil/sedang/').$profil->gambar)) {
                unlink(public_path('upload/profil/sedang/').$profil->gambar);
            }
        }

        $profil->delete();
        Session::flash('pesan_sukses', 'Data '. $profil->nama .' Berhasil Dihapus');
        
        return redirect('admin/profil');
    }

    public function hapusgambar($id)
    {
        $profil = ProfilWeb::findorfail($id);

        if(file_exists(public_path('upload/profil/kecil/').$profil->gambar)) {
            unlink(public_path('upload/profil/kecil/').$profil->gambar);
        }

        if(file_exists(public_path('upload/profil/sedang/').$profil->gambar)) {
            unlink(public_path('upload/profil/sedang/').$profil->gambar);
        }

        $profil->gambar = "";
        Session::flash('pesan_sukses', 'Gambar berhasil di hapus');
        $profil->save();

        return redirect('admin/profil/' . $profil->id.'/edit');
    }

    private function UploadGambar(Request $request, $link)
    {
        $gambar = $request->file('gambar');
        $ext    = $gambar->getClientOriginalExtension();

        if($request->file('gambar')->isValid()) {

            $gambar_nama = $link . ".$ext";
            $upload_path = "upload/profil/kecil";
            $upload_path2 = "upload/profil/sedang";
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
