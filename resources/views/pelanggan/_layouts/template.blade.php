{{-- <!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/lion-v2/lion/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Sep 2018 13:58:15 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Saline App - Jasa Rias Banyuwangi</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ url('pelanggan/img/favicon.png') }}">
		
		<!-- all css here -->
        <link rel="stylesheet" href="{{ url('pelanggan/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('pelanggan/css/bundle.css') }}">
        <link rel="stylesheet" href="{{ url('pelanggan/css/plugins.css') }}">
        <link rel="stylesheet" href="{{ url('pelanggan/css/style.css') }}">
        <link rel="stylesheet" href="{{ url('pelanggan/css/responsive.css') }}">
        <script src="{{ url('pelanggan/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
    <meta name="description" content="Saline App - Jasa Rias Banyuwangi" />
	<meta property="og:title" content="Saline App - Jasa Rias Banyuwangi" />
	<meta property="og:description" content="Saline App - Jasa Rias Banyuwangi" />
	<meta property="og:image" content="social-image.png" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="{{ url('pelanggan/images/favicon.ico') }}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ url('pelanggan/images/favicon.png') }}" />
	
	<!-- PAGE TITLE HERE -->
	<title>BeautyZone : Beauty Spa Salon HTML Template </title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="https://s3.ap-south-1.amazonaws.com/dzon-html/beautyzone/xhtml/js/html5shiv.min.js"></script>
	<script src="https://s3.ap-south-1.amazonaws.com/dzon-html/beautyzone/xhtml/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/templete.css">
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
	<link rel="stylesheet" type="text/css" href="plugins/switcher/switcher.css">
	<!-- Revolution Slider Css -->
	<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">
	<!-- Revolution Navigation Style -->
</head>
<body id="bg">
    <div class="page-wraper">
        <div id="loading-area"></div>        
        
        @php
        $setting = DataSetting(1);    
        @endphp
        @include('pelanggan/_layouts/header')

            @yield('main')
            
        @include('pelanggan/_layouts/footer')


        <button class="scroltop fa fa-chevron-up" ></button>
    </div>
    <!-- JAVASCRIPT FILES ========================================= -->
    <script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
    <script src="plugins/wow/wow.js"></script><!-- WOW JS -->
    <script src="plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
    <script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
    <script src="plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
    <script src="plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
    <script src="plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
    <script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
    <script src="plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
    <script src="plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
    <script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
    <script src="plugins/rangeslider/rangeslider.js" ></script><!-- Rangeslider -->
    <script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
    <script src="js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
    <script src='../../www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
    <script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->
    <!-- revolution JS FILES -->
    <script src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="js/rev.slider.js"></script>
    <script>
    jQuery(document).ready(function() {
        'use strict';
        dz_rev_slider_1();
    });	/*ready*/
    </script>
    </body>

    </html>
