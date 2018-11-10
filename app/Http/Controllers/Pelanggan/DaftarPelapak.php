<?php

namespace App\Http\Controllers\Pelanggan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;
use App\Models\PelapakModel;

class DaftarPelapak extends Controller
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
        return view('pelanggan/daftar-pelapak');
    }

    public function simpan(Request $request)
    {
        // kirim email
        $pelapak = new PelapakModel;
        
        $this->validate($request, [
            'email'     => 'required|unique:pelapak,email,'.$pelapak['id'],
            'password'  => 'required|min:6|same:konfirmasiPassword'
        ]);

        $pelapak->nama = $request->nama;
        $pelapak->nik = $request->nik;
        $pelapak->telepon = $request->telepon;
        $pelapak->tempat_lahir = $request->tempat_lahir;
        $pelapak->tanggal_lahir = $request->tanggal_lahir;
        $pelapak->alamat = $request->alamat;
        $pelapak->email = $request->email;
        $pelapak->status = true;
        $pelapak->activation_token = str_random(255);
        $pelapak->password = bcrypt($request->password);

        if($request->hasFile('gambar')) {
            $pelapak->gambar = $this->UploadGambar($request, $pelapak->nama);
        }

        $pelapak->save();

        Session::flash('pesan_sukses', 'Pendaftaran Berhasil, Aktifkan akun melalui email pendaftaran !');

        return view('pelanggan/daftar-pelapak');
    }

    

}
