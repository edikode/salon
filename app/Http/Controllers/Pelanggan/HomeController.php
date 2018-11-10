<?php

namespace App\Http\Controllers\Pelanggan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SettingWeb;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function index()
    {
        $setting = SettingWeb::findorfail(1);
        return view('pelanggan/dashboard',compact('setting'));
    }

    public function error()
    {
        $profil  = PengaturanKontak::first();
        
        $pesan_error = "Halaman Tidak Ditemukan";
        return view('errors/404-front', compact('profil', 'pesan_error'));
    }
}
