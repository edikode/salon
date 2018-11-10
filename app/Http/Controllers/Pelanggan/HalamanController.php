<?php

namespace App\Http\Controllers\Pelanggan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PaketModel;
use App\Models\ProfilWeb;

class HalamanController extends Controller
{
    public function index($link)
    {

    	if($link == "admin") {

            return redirect('admin/home');

        } elseif($link == "pelapak") {

            return redirect('pelapak/home');

        } else {


            if($link == "paket"){
                $paket = PaketModel::all();
                return view('pelanggan/paket', compact('paket','setting'));

            } else if($link == "tentang-aplikasi"){
                $profil = ProfilWeb::where('link',$link)->first();
                return view('pelanggan/tentang-aplikasi', compact('profil','setting'));
                
            } else if($link == "mari-bergabung"){
                $profil = ProfilWeb::where('link',$link)->first();
                return view('pelanggan/mari-bergabung', compact('profil','setting'));
                
            } else if($link == "kontak-kami"){
                $profil = ProfilWeb::where('link',$link)->first();
                return view('pelanggan/kontak-kami', compact('profil','setting'));
                
            } else if($link == "daftar"){
                $profil = ProfilWeb::where('link',$link)->first();
                return view('pelanggan/daftar-pelanggan', compact('profil','setting'));
                
            } else {
                $profil = ProfilWeb::where('link', $link)->first();

                if($profil){
                    dd("tiuttiut");
                } else {
                    return view('errors/404');
                }

            }

        }
	}
}
