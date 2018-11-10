<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;
use Image;

use App\Models\AdminModel;

class Admin extends Controller
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
        $admin = AdminModel::all();
        return view('admin/admin/home', compact('admin'));
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
        $admin = new AdminModel;

        $this->validate($request, [
            'nama'      => 'required|unique:admin,nama,'.$admin['id'],
            'email'     => 'required|unique:admin,email,'.$admin['id'],
            'password'  => 'required|min:6|same:konfirmasiPassword'
        ]);

        $admin->nama = $request->nama;
        $admin->email = $request->email;
        $admin->status = true;
        $admin->activation_token = str_random(255);
        $admin->password = bcrypt($request->password);

        if($request->hasFile('gambar')) {
            $admin->gambar = $this->UploadGambar($request, $admin->nama);
        }

        $admin->save();

        Session::flash('pesan_sukses', 'Data Admin Aplikasi berhasil di perbarui');

        return redirect('admin/data-admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = AdminModel::findorfail($id);
        return view('admin/admin/show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = AdminModel::findorfail($id);
        return view('admin/admin/edit', compact('admin'));
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
        $admin = AdminModel::findorfail($id);

        $this->validate($request, [
            'nama'      => 'required|unique:admin,nama,'.$admin['id'],
            'email'     => 'required|unique:admin,email,'.$admin['id'],
        ]);

        $admin->nama = $request->nama;
        $admin->email = $request->email;
        $admin->status = $request->status;

        if($request->hasFile('gambar')) {
            $admin->gambar = $this->UploadGambar($request, $admin->nama);
        }

        $admin->save();

        Session::flash('pesan_sukses', 'Data Admin Aplikasi berhasil di perbarui');

        return redirect('admin/data-admin/'.$admin->id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = AdminModel::findorfail($id);

        if($admin->gambar != ""){
            if(file_exists(public_path('upload/admin/kecil/').$admin->gambar)) {
                echo "string";
                unlink(public_path('upload/admin/kecil/').$admin->gambar);
            }
            if(file_exists(public_path('upload/admin/sedang/').$admin->gambar)) {
                unlink(public_path('upload/admin/sedang/').$admin->gambar);
            }
        }

        $admin->delete();
        Session::flash('pesan_sukses', 'Data '. $admin->nama .' Berhasil Dihapus');
        
        return redirect('admin/data-admin');
    }

    public function hapusgambar($id)
    {
        $admin = AdminModel::findorfail($id);

        if(file_exists(public_path('upload/admin/kecil/').$admin->gambar)) {
            unlink(public_path('upload/admin/kecil/').$admin->gambar);
        }

        if(file_exists(public_path('upload/admin/sedang/').$admin->gambar)) {
            unlink(public_path('upload/admin/sedang/').$admin->gambar);
        }

        $admin->gambar = "";
        Session::flash('pesan_sukses', 'Gambar berhasil di hapus');
        $admin->save();

        return redirect('admin/data-admin/' . $admin->id.'/edit');
    }

    private function UploadGambar(Request $request, $link)
    {
        $gambar = $request->file('gambar');
        $ext    = $gambar->getClientOriginalExtension();

        if($request->file('gambar')->isValid()) {

            $gambar_nama = $link . ".$ext";
            $upload_path = "upload/admin/kecil";
            $upload_path2 = "upload/admin/sedang";
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
