<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Session;
use Image;
use Illuminate\Support\Str;

use App\Models\KategoriModel;

class Kategori extends Controller
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
        $kategori = KategoriModel::where('parent',0)->get();
        return view('admin/kategori/home', compact('kategori'));
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
        $kategori = new KategoriModel;

        $this->validate($request, [
            'nama'      => 'required',
            'nama'      => 'required|unique:kategori,link,'.$kategori['id'],
        ]);

        $kategori->nama = $request->nama;
        $kategori->link = Str::slug($request->nama);
        $kategori->parent = $request->parent;

        $kategori->save();

        Session::flash('pesan_sukses', 'Data Kategori Aplikasi berhasil di tambah');

        return redirect('admin/kategori');
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
        $parent = KategoriModel::where('parent',0)->get();
        $kategori = KategoriModel::findorfail($id);
        return view('admin/kategori/edit', compact('kategori','parent'));
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
        $kategori = KategoriModel::findorfail($id);

        $this->validate($request, [
            'nama'      => 'required',
            'link'      => 'unique:kategori,link,'.$kategori['id'],
        ]);

        $kategori->nama = $request->nama;
        $kategori->link = Str::slug($request->link);
        $kategori->parent = $request->parent;

        $kategori->save();

        Session::flash('pesan_sukses', 'Data Kategori Paket berhasil di perbarui');

        return redirect('admin/kategori/'.$kategori->id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = KategoriModel::findorfail($id);
        $kategori->delete();
        Session::flash('pesan_sukses', 'Data '. $kategori->nama .' Berhasil Dihapus');
        
        return redirect('admin/kategori');
    }

}
