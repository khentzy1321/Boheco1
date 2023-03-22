<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOHECO I</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset ('resources/Magnific-Popup-master/dist/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('resources/animate.css-main/animate.css')}}">

    <link rel='stylesheet' id='tablepress-default-css'  href='https://boheco1.com/wp-content/plugins/tablepress/css/default.min.css?ver=1.11' type='text/css' media='all' />
    
    <script type='text/javascript' src='https://boheco1.com/wp-content/themes/julz-theme-2/js/jquery.js?ver=5.4.12'></script>
    <script type='text/javascript' src='https://boheco1.com/wp-content/themes/julz-theme-2/js/bootstrap.js?ver=5.4.12'></script>
    <script type='text/javascript' src='https://boheco1.com/wp-content/themes/julz-theme-2/js/myjs.js?ver=5.4.12'></script>
    {{-- <link rel='stylesheet' id='bootstrap-grid_css-css'  href='https://boheco1.com/wp-content/themes/julz-theme-2/css/bootstrap-grid.css?ver=5.4.12' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-reboot_css-css'  href='https://boheco1.com/wp-content/themes/julz-theme-2/css/bootstrap-reboot.css?ver=5.4.12' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css'  href='https://boheco1.com/wp-includes/css/dist/block-library/style.min.css?ver=5.4.12' type='text/css' media='all' />
    <link rel='https://api.w.org/' href='https://boheco1.com/index.php/wp-json/' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://boheco1.com/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://boheco1.com/wp-includes/wlwmanifest.xml" /> 
    <meta name="generator" content="WordPress 5.4.12" />
    <link rel="canonical" href="https://boheco1.com/" />
    <link rel='shortlink' href='https://boheco1.com/' />
    <link rel="alternate" type="application/json+oembed" href="https://boheco1.com/index.php/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fboheco1.com%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://boheco1.com/index.php/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fboheco1.com%2F&#038;format=xml" /> --}}

</head>
<body>
  
    <header class="header">
      
        @include('layouts.nav')
        
        <div class="hero-div center container">
          <h1 style="font-family: Times New Roman">BOHOL I ELECTRIC COOPERATIVE, INC.</h1>
          <p class="animate__animated animate__fadeInUp animate__slow">Cabulijan, Tubigon, Bohol</p>
         
          <div class="row center">
            <div class="col-sm-5 col-lg-5 animate__animated animate__fadeInLeft animate__slow">
              <h3 class="txt">MISSION</h3>
        
              <p><h6>To deliver quality electric services consistent with our core values, taking advantage of the latest technologies of the resources for member-consumer-owner satisfaction.</h6></p>
            </div>
            <div class="vl"></div>
            <div class="col-sm-5 col-lg-5 animate__animated animate__fadeInRight animate__slow">
              <h3 class="txt">VISION</h3>
     
             <p> <h6 class="mb-5">The premier electric power provider improving the lives of every Boholano</h6></p>
            </div> 
            
          </div>
  
          <div class="hero-btns animate__animated animate__fadeInUp animate__slow">
            <a href="#service"><button type="button" class="btn-trans">SERVICES</button></a>
            <a href="{{ url('/bill') }}"><button type="button" class="btn-white">QUICK BILL INQUIRY</button></a>
          </div>
        </div>
  
    </header>

    @include('site')
    <!-- @yield('content') -->
    
    @include('layouts.footer')


    <script src="{{asset('resources/jquery-3.5.1.js')}}"></script>
    <!-- magnific popup -->
    <script src="{{asset('resources/Magnific-Popup-master/dist/jquery.magnific-popup.js')}}"></script>
    <!-- owl carousel -->
    <script src="{{asset('resources/OwlCarousel2-2.3.4/dist/owl.carousel.js')}}"></script>
    <!-- wow js -->
    <script src="{{asset('resources/WOW-master/dist/wow.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    {{-- Custom Js --}}
    <script src="{{asset('js/script.js')}}">
    <script type='text/javascript' src='https://boheco1.com/wp-includes/js/wp-embed.min.js?ver=5.4.12'></script>
    <script type='text/javascript' src='https://boheco1.com/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
    <script type='text/javascript' src='https://boheco1.com/wp-content/plugins/tablepress/js/jquery.datatables.min.js?ver=1.11'></script>
        <script type="text/javascript">
          
    jQuery(document).ready(function($){
    $('#tablepress-1').dataTable({"order":[],"orderClasses":false,"stripeClasses":["even","odd"],"pagingType":"simple"});
    });

</script>
</body>
</html>
