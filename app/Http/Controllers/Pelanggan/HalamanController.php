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

            $profil = ProfilWeb::where('link',$link)->first();

            if($link == "tim-kami"){

                return view('pelanggan/tim-kami', compact('profil','setting'));


            } else if($link == "kontak-kami"){

                return view('pelanggan/kontak-kami', compact('profil','setting'));

            } else if($link == "blog"){

                return view('pelanggan/blog');
                
            } else if($link == "mari-bergabung"){

                return view('pelanggan/mari-bergabung', compact('profil','setting'));
                
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
