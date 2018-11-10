<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Data Paket Wisata</title>
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
                    <h2>Data Referral</h2>
                </center>  
            </div>
            <br>
            <p>Filter Berdasarkan : {{$filter}}</p>
            <p style="margin-top:-20px">Kata Kunci : {{$keyword}}</p>
            <table class="tg">
              <tr>
                <th class="tg-3wr7">No</th>
                <th class="tg-3wr7">Nama</th>
                <th class="tg-3wr7">Email</th>
                <th class="tg-3wr7">Telepon</th>
                <th class="tg-3wr7">Alamat</th>
                <th class="tg-3wr7">Bergabung Sejak</th>
                <th class="tg-3wr7">Status</th>
              </tr>
             
                @php $i = 1; @endphp

                @foreach($referral as $p)

                    <tr>
                        <td class="tg-rv4w" width="5%">{{$i}}</td>
                        <td class="tg-rv4w" width="10%">{{$p->name}}</td>
                        <td class="tg-rv4w" width="20%">{{$p->email}}</td>
                        <td class="tg-rv4w" width="10%">{{$p->telepon}}</td>
                        <td class="tg-rv4w" width="20%">{{$p->alamat}}</td>
                        <td class="tg-rv4w" width="10%">{{tgl_id($p->created_at)}}</td>
                        <td class="tg-rv4w" width="10%" align="center">@if($p->aktif == 1) Aktif @else Nonaktif @endif</td>
                    </tr>
                    @php $i = $i+1; @endphp

                @endforeach
            </table>

            <p>Jumlah data referral : {{$jumlah}} Data</p>
        </body>
    </head>
</html>