<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Laporan Pemesanan Berdasarkan Paket wisata</title>
        <body>
            <style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
                .tg td{font-family:Arial;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                .tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                .tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-ti5e{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-rv4w{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;}
            </style>
  
            <div style="font-family:Arial; font-size:12px;">
                <center>
                    <h1>Wisata Alam Indonesia Tour Services</h1>
                    
                    <p align="center" style="margin-top: -10px;">Perum Gardenia Blok G29, Jl. S. Parman, Sobo<br/>Banyuwangi - Jawa Timur - Indonesia<br/>Telepon : +62 821 4296 1911<br/>Website: wisata-alam.com</p>
                    <hr>
                    <h2>Laporan Pemesanan Berdasarkan Paket wisata</h2>
                </center>  
            </div>
            <br>
            <p>Filter Berdasarkan : {{$filter}}</p>
            <p style="margin-top:-20px">Kata Kunci : {{$keyword}}</p>
            <table class="tg">
              <tr>
                <th class="tg-3wr7">No</th>
                <th class="tg-3wr7">Nama Paket</th>
                <th class="tg-3wr7">Kategori</th>
                <th class="tg-3wr7">Hari</th>
                <th class="tg-3wr7">Harga</th>
                <th class="tg-3wr7">QTY Pemesanan</th>
                <th class="tg-3wr7">Peserta Dewasa</th>
                <th class="tg-3wr7">Peserta Anak</th>
                <th class="tg-3wr7">Total Peserta</th>
              </tr>
             
                @php 
                    $i = 1;
                    $total_pesanan = 0;
                    $total_anak = 0;
                    $total_dewasa = 0;
                    $total = 0;
                @endphp

                @foreach($paket as $p)

                @php 
                    $dataKat = Kategori_detail($p->kategori_id);
                    $jumlahPesanan = Jumlah_pesanan($p->id,$bulan,$tahun); 
                    $totalPeserta = Total_peserta($p->id,$bulan,$tahun);
                    $jml_anak = 0;
                    $jml_dewasa = 0;
                   
                    foreach($totalPeserta as $t){
                        $jml_anak = $t->jml_anak + $jml_anak;
                        $jml_dewasa = $t->jml_dewasa + $jml_dewasa;
                    }

                @endphp
                
                <tr>
                    <td class="tg-rv4w" width="5%" align="center">{{$i}}</td>
                    <td class="tg-rv4w" width="25%">{{$p->nama}}</td>
                    <td class="tg-rv4w" width="10%">{{$dataKat->nama}}</td>
                    <td class="tg-rv4w" width="10%" align="center">{{$p->hari}} Hari</td>
                    <td class="tg-rv4w" width="10%" style="text-align: right;">{{angkaRupiah($p->harga)}}</td>
                    <td class="tg-rv4w" width="10%" align="center">{{$jumlahPesanan}}</td>
                    <td class="tg-rv4w" width="10%" align="center">{{$jml_anak}}</td>
                    <td class="tg-rv4w" width="10%" align="center">{{$jml_dewasa}}</td>
                    <td class="tg-rv4w" width="10%" align="center">{{$jml_anak+$jml_dewasa}}</td>
                </tr>
                
                @php
                    $i = $i+1;
                    $total_pesanan = $total_pesanan+$jumlahPesanan;
                    $total_anak = $total_anak+$jml_anak;
                    $total_dewasa = $total_dewasa+$jml_dewasa;
                    @endphp
                @endphp

                @endforeach

                <tr>
                    <td colspan="5">Total Bulan {{nama_bulan($bulan)}}</td>
                    <td class="center">{{$total_pesanan}} Pesanan</td>
                    <td class="center">{{$total_dewasa}} Dewasa</td>
                    <td class="center">{{$total_anak}} Anak</td>
                    <td class="center">{{$total_dewasa+$total_anak}} Peserta</td>
                </tr>
            </table>

            <p>Jumlah data paket wisata : {{$jumlah}} Data</p>
        </body>
    </head>
</html>