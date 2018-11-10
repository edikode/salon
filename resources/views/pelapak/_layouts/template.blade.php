<!DOCTYPE html>
<html lang="en" class="no-js">  
<head>
  <title>Pelapak - @yield('title')</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta content="Pelapak" name="description" />
  <meta content="Pelapak" name="author" />
  
  <link rel="shortcut icon" href="{{ asset('admins/images/admin.png') }}" />
  <link rel="stylesheet" href="{{ asset('admins/plugins/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admins/plugins/bootstrap/css/bootstrap.min.css') }}"  media="screen">
  <link rel="stylesheet" href="{{ asset('admins/css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('admins/css/main-responsive.css') }}">
  <link rel="stylesheet" href="{{ asset('admins/css/skin.css') }}" id="skin_color">
  <link rel="stylesheet" href="{{ asset('admins/plugins/iCheck/skins/all.css') }}">
  <link rel="stylesheet" href="{{ asset('admins/fonts/style.css') }}">
  <!-- UNTUK FORM -->
  <link rel="stylesheet" href="{{ asset('admins/plugins/jQuery-Tags-Input/jquery.tagsinput.css') }}">
  <link rel="stylesheet" href="{{ asset('admins/plugins/select2/select2.css') }}">
  <link rel="stylesheet" href="{{ asset('admins/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css') }}"> 
  <!-- UNTUK TABEL DATA -->   
  <link rel="stylesheet" href="{{ asset('admins/plugins/DataTables/media/css/DT_bootstrap.css') }}" />
  {{-- untuk upload gambar banyak --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('admins/css/dropzone.css') }}">
  {{-- social button untuk profil --}}
  <link rel="stylesheet" href="{{ asset('admins/plugins/bootstrap-social-buttons/social-buttons-3.css') }}">

</head>

<body>
  @include('pelapak/_layouts/header')
  <div class="main-container">
    @include('pelapak/_layouts/menu')
    <div class="main-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <ol class="breadcrumb">
              @yield('bread')
            </ol>
            <div class="page-header clearfix">
              <div class="row">
                <div class="col-sm-6"><h1>@yield('title')</h1></div>            
                <div class="col-sm-6">
                  @yield('button') 
                </div>            
              </div>  
            </div>        
          </div>
        </div>
          @yield('main')     
      </div>
    </div>
  </div>
  @include('pelapak/_layouts/footer')

  
  <script src="{{ asset('admins/js/jquery.min.js') }}"></script>
  <script src="{{ asset('admins/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
  <!-- UNTUK FORM -->
  {{-- input limit karakter --}}
  <script src="{{ asset('admins/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js') }}"></script>
  {{-- teks deskripsi height menyesuaikan --}}
  <script src="{{ asset('admins/plugins/autosize/jquery.autosize.min.js') }}"></script>
  {{-- select dengan pencarian --}}
  <script src="{{ asset('admins/plugins/select2/select2.min.js') }}"></script>
  {{-- input tag --}}
  <script src="{{ asset('admins/plugins/jQuery-Tags-Input/jquery.tagsinput.js') }}"></script>
  {{-- input radio --}}
  <script src="{{ asset('admins/plugins/iCheck/jquery.icheck.min.js') }}"></script>
  <script src="{{ asset('admins/plugins/perfect-scrollbar/src/perfect-scrollbar.js') }}"></script>
  {{-- untuk upload gambar --}}
  <script src="{{ asset('admins/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
  {{-- untuk ckeditor textarea --}}
  <script src="{{ asset('functions/ckeditor/ckeditor.js') }}"></script>
  {{-- upload gambar banyak --}}
  <script src="{{ asset('admins/js/dropzone.js') }}"></script>
  <!-- untuk data table -->   
  <script type="text/javascript" src="{{ asset('admins/plugins/DataTables/media/js/jquery.dataTables.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('admins/plugins/DataTables/media/js/DT_bootstrap.js') }}"></script>
  <script src="{{ asset('admins/js/table-data.js') }}"></script>
  
  <script src="{{ asset('admins/js/form-elements.js') }}"></script>
  <script src="{{ asset('admins/js/main.js') }}"></script>

  {{-- manual --}}
  {{-- <script type="text/javascript" src="{{ asset('admins/asli/angka.js') }}"></script> --}}
  <script>
    jQuery(document).ready(function() {
      Main.init();
      // UIModals.init();
      TableData.init();
      // FormWizard.init();
      FormElements.init();
    });
  </script>

  <script type="text/javascript"> 

    function aktif() {
        swal("Berhasil diperbarui!", "Data berhasil diaktifkan!", "success");
    }

    function nonaktif() {
        swal("Berhasil diperbarui!", "Data berhasil dinonaktifkan!", "success");
    }

    function edit() {
        swal("Berhasil diperbarui!", "Data berhasil diperbarui!", "success");
    }

    function stopRKey(evt) { 
      var evt = (evt) ? evt : ((event) ? event : null); 
      var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
      if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
    } 
    document.onkeypress = stopRKey;

    function konfirmasi() {
      if(confirm("Apakah anda ingin menghapus data ini ?"))
        return swal("Berhasil diperbarui!", "Data berhasil dihapus!", "success");
      else
        return false;
    }

    function lunas() {
      if(confirm("Apakah tagihan pelanggan sudah lunas ?"))
        return swal("Berhasil diperbarui!", "Data berhasil diperbarui!", "success");
      else
        return false;
    }
    
    function selesai() {
      if(confirm("Apakah pelanggan sudah melakukan jadwal tour ?"))
        return swal("Berhasil diperbarui!", "Data berhasil diperbarui!", "success");
      else
        return false;
    }

    function hapusgambar() {      
      if(confirm("Apakah anda ingin menghapus gambar ini ?"))
        return swal("Berhasil diperbarui!", "Gambar berhasil dihapus!", "success");
      else
        return false;
    }

  </script>
</body>
  
</html>
