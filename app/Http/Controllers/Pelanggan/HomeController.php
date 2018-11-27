<?php

namespace App\Http\Controllers\Pelanggan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\PaketModel;
use App\Models\SettingWeb;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function index()
    {
        $paket = DB::table('pelapak')
            ->join('paket', 'pelapak.id', '=', 'paket.pelapak_id')
            ->select('pelapak.nama as pelapak', 'paket.nama', 'paket.deskripsi','paket.link','paket.harga','paket.gambar')
            ->get();
        $setting = SettingWeb::findorfail(1);
        return view('pelanggan/dashboard',compact('paket','setting'));
    }

    public function error()
    {
        $profil  = PengaturanKontak::first();
        
        $pesan_error = "Halaman Tidak Ditemukan";
        return view('errors/404-front', compact('profil', 'pesan_error'));
    }
}
