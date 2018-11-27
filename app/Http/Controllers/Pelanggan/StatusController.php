<?php

namespace App\Http\Controllers\Pelanggan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;
use Auth;
use App\Models\SettingWeb;
use App\Models\Pemesanan;


class StatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index($link)
    {
        $setting = SettingWeb::findorfail(1);
        $pemesanan = Pemesanan::where("pelanggan_id", Auth::user()->id)->get();

        dd($pemesanan);

        if($link == "pembayaran"){
           
        } elseif($link == "proses-rias"){
           
        }
        

        return view('pelanggan/status',compact('setting','pemesanan'));
    }

}

?>
