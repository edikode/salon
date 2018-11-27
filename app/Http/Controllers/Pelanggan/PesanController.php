<?php

namespace App\Http\Controllers\Pelanggan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Auth;
use Session;
use App\Models\PaketModel;
use App\Models\SettingWeb;
use App\Models\Pemesanan;
use App\Models\Alamat;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($link)
    {
        $setting = SettingWeb::findorfail(1);
        $paket = DB::table('pelapak')
            ->join('paket', 'pelapak.id', '=', 'paket.pelapak_id')
            ->select('pelapak.nama as pelapak', 'paket.id', 'paket.nama', 'paket.deskripsi','paket.link','paket.harga','paket.gambar')
            ->where('paket.link',$link)
            ->first();
        
        $pelanggan = Auth::user();

        return view('pelanggan/pesan',compact('setting','paket','pelanggan'));
    }

     public function simpan(Request $request)
    {
        $pesanan = new Pemesanan;
        
        // $this->validate($request, [
        //     'j_orang'     => 'numeric',
        // ]);
        $pesanan->id = rand(0000,9999);
        $pesanan->paket_id = $request->paket_id; 
        $pesanan->pelanggan_id = Auth::user()->id;
        $pesanan->tanggal_rias = $request->tanggal_rias;
        $pesanan->jam_mulai = $request->jam_mulai;
        $kode = rand(000,999);
        $pesanan->total = $request->total+$kode;
        $pesanan->keterangan = $request->keterangan;
        $pesanan->status = 0;
        
        $alamat = new Alamat;
        $alamat->pelanggan_id = Auth::user()->id;
        $alamat->nama = $request->nama;
        $alamat->telepon = $request->telepon;
        $alamat->rtrw = $request->rtrw;
        $alamat->dusun = $request->dusun;
        $alamat->desa = $request->desa;
        $alamat->kecamatan = $request->kecamatan;
        $alamat->kabupaten = $request->kabupaten;
        $alamat->alamat = $request->alamat;

        $alamat->save();

        $pesanan->alamat_id = $alamat->id;

        $pesanan->save();

        Session::flash('pesan_sukses', 'Pemesanan Berhasil !');

        return redirect('pelanggan/status');
    }

}
