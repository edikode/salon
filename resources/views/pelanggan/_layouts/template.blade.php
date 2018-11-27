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
	<link rel="icon" href="{{ asset('pelanggan/images/favicon.ico') }}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('pelanggan/images/favicon.png') }}" />
	
	<!-- PAGE TITLE HERE -->
	<title>Saline App - Jasa Rias Banyuwangi </title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('pelanggan/css/plugins.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('pelanggan/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('pelanggan/css/templete.css') }}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('pelanggan/css/skin/skin-1.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('pelanggan/plugins/switcher/switcher.css') }}">
	<!-- Revolution Slider Css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('pelanggan/plugins/revolution/revolution/css/layers.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('pelanggan/plugins/revolution/revolution/css/settings.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('pelanggan/plugins/revolution/revolution/css/navigation.css') }}">
    <!-- Revolution Navigation Style -->
    
    {{-- khusus booking --}}
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('pelanggan/plugins/smartwizard/css/smart_wizard.css')}}">
	<link rel="stylesheet" href="{{ asset('pelanggan/plugins/datepicker/css/bootstrap-datetimepicker.min.css')}}"/>
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
    <script src="{{asset('pelanggan/js/jquery.min.js')}}"></script><!-- JQUERY.MIN JS -->
    <script src="{{asset('pelanggan/plugins/wow/wow.js')}}"></script><!-- WOW JS -->
    <script src="{{asset('pelanggan/plugins/bootstrap/js/popper.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{asset('pelanggan/plugins/bootstrap/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{asset('pelanggan/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script><!-- FORM JS -->
    <script src="{{asset('pelanggan/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script><!-- FORM JS -->
    <script src="{{asset('pelanggan/plugins/magnific-popup/magnific-popup.js')}}"></script><!-- MAGNIFIC POPUP JS -->
    <script src="{{asset('pelanggan/plugins/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
    <script src="{{asset('pelanggan/plugins/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
    <script src="{{asset('pelanggan/plugins/imagesloaded/imagesloaded.js')}}"></script><!-- IMAGESLOADED -->
    <script src="{{asset('pelanggan/plugins/masonry/masonry-3.1.4.js')}}"></script><!-- MASONRY -->
    <script src="{{asset('pelanggan/plugins/masonry/masonry.filter.js')}}"></script><!-- MASONRY -->
    <script src="{{asset('pelanggan/plugins/owl-carousel/owl.carousel.js')}}"></script><!-- OWL SLIDER -->
    <script src="{{asset('pelanggan/plugins/rangeslider/rangeslider.js')}}" ></script><!-- Rangeslider -->
    <script src="{{asset('pelanggan/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
    <script src="{{asset('pelanggan/js/dz.carousel.js')}}"></script><!-- SORTCODE FUCTIONS  -->
    <script src='../../www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
    <script src="{{asset('pelanggan/js/dz.ajax.js')}}"></script><!-- CONTACT JS  -->
    <!-- revolution JS FILES -->
    <script src="{{asset('pelanggan/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('pelanggan/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    {{-- <script src="{{asset('pelanggan/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('pelanggan/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('pelanggan/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('pelanggan/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('pelanggan/plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('pelanggan/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('pelanggan/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('pelanggan/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('pelanggan/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="{{asset('pelanggan/js/rev.slider.js')}}"></script>
    <script>
    jQuery(document).ready(function() {
        'use strict';
        dz_rev_slider_1();
    });	/*ready*/
    </script> --}}

    <script src="{{asset('pelanggan/plugins/datepicker/js/moment.js')}}"></script><!-- DATEPICKER JS -->
    <script src="{{asset('pelanggan/plugins/datepicker/js/bootstrap-datetimepicker.min.js')}}"></script><!-- DATEPICKER JS -->
    <script src="{{asset('pelanggan/plugins/smartwizard/js/jquery.smartWizard.js')}}"></script>
    <script>
        $(document).ready(function(){

            // Step show event
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
            //alert("You are on step "+stepNumber+" now");
            if(stepPosition === 'first'){
                $("#prev-btn").addClass('disabled');
            }else if(stepPosition === 'final'){
                $("#next-btn").addClass('disabled');
            }else{
                $("#prev-btn").removeClass('disabled');
                $("#next-btn").removeClass('disabled');
            }
            });

            // Toolbar extra buttons
            var btnFinish = $('<button></button>').text('Finish')
                                            .addClass('btn btn-info')
                                            .on('click', function(){ alert('Finish Clicked'); });
            var btnCancel = $('<button></button>').text('Cancel')
                                            .addClass('btn btn-danger')
                                            .on('click', function(){ $('#smartwizard').smartWizard("reset"); });


            // Smart Wizard
            $('#smartwizard').smartWizard({
                    selected: 0,
                    theme: 'default',
                    transitionEffect:'fade',
                    showStepURLhash: true,
                    toolbarSettings: {toolbarPosition: 'both',
                                    toolbarButtonPosition: 'end',
                                    toolbarExtraButtons: [btnFinish, btnCancel]
                                    }
            });


            // External Button Events
            $("#reset-btn").on("click", function() {
                // Reset wizard
                $('#smartwizard').smartWizard("reset");
                return true;
            });

            $("#prev-btn").on("click", function() {
                // Navigate previous
                $('#smartwizard').smartWizard("prev");
                return true;
            });

            $("#next-btn").on("click", function() {
                // Navigate next
                $('#smartwizard').smartWizard("next");
                return true;
            });

            $("#theme_selector").on("change", function() {
                // Change theme
                $('#smartwizard').smartWizard("theme", $(this).val());
                return true;
            });

            // Set selected theme on page refresh
            $("#theme_selector").change();
        });
    </script>
    <script>
    jQuery(document).ready(function() {
        $('#datetimepicker4').datetimepicker();
    });	
    </script>
    </body>

    </html>
