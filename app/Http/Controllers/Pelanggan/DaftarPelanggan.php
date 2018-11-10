<?php

namespace App\Http\Controllers\Pelanggan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;
use App\Models\PelangganModel;

class DaftarPelanggan extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pelanggan/daftar-pelanggan');
    }

    public function simpan(Request $request)
    {
        // kirim email
        $pelanggan = new PelangganModel;
        
        $this->validate($request, [
            'email'     => 'required|unique:pelanggan,email,'.$pelanggan['id'],
            'password'  => 'required|min:6|same:konfirmasiPassword'
        ]);

        $pelanggan->nama = $request->nama;
        $pelanggan->telepon = $request->telepon;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->email = $request->email;
        $pelanggan->status = true;
        $pelanggan->activation_token = str_random(255);
        $pelanggan->password = bcrypt($request->password);

        if($request->hasFile('gambar')) {
            $pelanggan->gambar = $this->UploadGambar($request, $pelanggan->nama);
        }

        $pelanggan->save();

        Session::flash('pesan_sukses', 'Pendaftaran Berhasil, Aktifkan akun melalui email pendaftaran !');

        return view('pelanggan/daftar-pelanggan');
    }

    

}
