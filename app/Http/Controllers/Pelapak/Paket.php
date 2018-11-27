<?php

namespace App\Http\Controllers\Pelapak;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Session;
use Image;
use Illuminate\Support\Str;

use App\Models\PaketModel;
use App\Models\KategoriModel;

class Paket extends Controller
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
        $filter = "";
        $keyword = "";
        $paket = PaketModel::paginate(10);
        return view('pelapak/paket/home', compact('filter','keyword','paket'));
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
        $paket = new PaketModel;

        $this->validate($request, [
            'nama'      => 'required',
            'harga'      => 'numeric',
            'nama'      => 'required|unique:paket,link,'.$paket['id'],
            'gambar'    => 'sometimes|image|max:1000|mimes:jpeg,jpg,bmp,png'
        ]);

        $paket->nama = $request->nama;
        $paket->link = Str::slug($request->nama);
        $paket->deskripsi = $request->deskripsi;
        $paket->kategori_id = 1;
        $paket->harga = $request->harga;
        $paket->teks = $request->teks;
        $paket->pelapak_id = Auth::user()->id;
        if($request->hasFile('gambar')) {
            $paket->gambar = $this->UploadGambar($request, $paket->link);
        }

        $paket->save();

        Session::flash('pesan_sukses', 'Data Paket berhasil di perbarui');

        return redirect('pelapak/paket');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paket = PaketModel::findorfail($id);
        return view('pelapak/paket/show', compact('paket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = KategoriModel::where('parent',0)->get();
        $paket = PaketModel::findorfail($id);
        return view('pelapak/paket/edit', compact('paket','kategori'));
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
        $paket = PaketModel::findorfail($id);

        $this->validate($request, [
            'nama'      => 'required',
            'harga'      => 'numeric',
            'link'      => 'unique:paket,link,'.$paket['id'],
            'gambar'    => 'sometimes|image|max:1000|mimes:jpeg,jpg,bmp,png'
        ]);

        $paket->nama = $request->nama;
        $paket->link = Str::slug($request->link);
        $paket->deskripsi = $request->deskripsi;
        $paket->harga = $request->harga;
        $paket->teks = $request->teks;
        $paket->kategori_id = 1;
        $paket->tampil = $request->tampil;
        if($request->hasFile('gambar')) {
            $paket->gambar = $this->UploadGambar($request, $paket->link);
        }

        $paket->save();

        Session::flash('pesan_sukses', 'Data Paket berhasil di perbarui');

        return redirect('pelapak/paket/'.$paket->id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paket = PaketModel::findorfail($id);

        if($paket->gambar != ""){
            if(file_exists(public_path('upload/paket/kecil/').$paket->gambar)) {
                echo "string";
                unlink(public_path('upload/paket/kecil/').$paket->gambar);
            }
            if(file_exists(public_path('upload/paket/sedang/').$paket->gambar)) {
                unlink(public_path('upload/paket/sedang/').$paket->gambar);
            }
        }

        $paket->delete();
        Session::flash('pesan_sukses', 'Data '. $paket->nama .' Berhasil Dihapus');
        
        return redirect('pelapak/paket');
    }

    public function hapusgambar($id)
    {
        $paket = PaketModel::findorfail($id);

        if(file_exists(public_path('upload/paket/kecil/').$paket->gambar)) {
            unlink(public_path('upload/paket/kecil/').$paket->gambar);
        }

        if(file_exists(public_path('upload/paket/sedang/').$paket->gambar)) {
            unlink(public_path('upload/paket/sedang/').$paket->gambar);
        }

        $paket->gambar = "";
        Session::flash('pesan_sukses', 'Gambar berhasil di hapus');
        $paket->save();

        return redirect('pelapak/paket/' . $paket->id.'/edit');
    }

    private function UploadGambar(Request $request, $link)
    {
        $gambar = $request->file('gambar');
        $ext    = $gambar->getClientOriginalExtension();

        if($request->file('gambar')->isValid()) {

            $gambar_nama = $link . ".$ext";
            $upload_path = "upload/paket/kecil";
            $upload_path2 = "upload/paket/sedang";
            $request->file('gambar')->move($upload_path, $gambar_nama);
            
            copy($upload_path. "/" .$gambar_nama, $upload_path2. "/" .$gambar_nama);

            $imgkecil = Image::make($upload_path. "/" .$gambar_nama);
            $imgkecil->fit(400, 400);
            $imgkecil->save();

            $imgsedang = Image::make($upload_path2. "/" .$gambar_nama);
            $imgsedang->fit(700, 400);
            $imgsedang->save();

            return $gambar_nama;
        }
        return false;
    }
    
    public function cari(Request $request)
    {
        $filter = $request->filter;
        $keyword = $request->keyword;

        if($filter == ""){
            
            $paket =  PaketModel::paginate(10);
        } else {

            if($filter == "nama"){
                $paket =  PaketModel::where('nama', 'LIKE', '%' . $keyword . '%')
                                ->paginate(10);
            } elseif($filter == "alamat") {
                $paket =  PaketModel::where('alamat', 'LIKE', '%' . $keyword . '%')
                                ->paginate(10);
            }
        }

        return view('pelapak/paket/home', compact('paket','filter','keyword'));
    }

}
