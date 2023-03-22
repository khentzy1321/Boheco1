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


</head>
<body>

@include('layouts.navbar')

<section class="more">


    <header class="mt-5">
        <img src="{{asset('images/logo.png')}}" alt="Company Name Logo" class="logo-more shadow">
    </header>
    
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-body">
                <h1 class="text-center" style="font-family:Times New Roman;">DIRECTORS</h1>
            
            <hr>
            <div class="mt-2">
                <img src="{{asset('images/director.jpg')}}" alt="Image">
            </div>
        </div>
        </div>
        <div class="card shadow mt-3">
            <div class="card-body">
                <h1 class="text-center" style="font-family:Times New Roman;">MANAGERS</h1>
            
            <hr>
            <div class="mt-2">
                <img src="{{asset('images/manager.jpg')}}" alt="Image">
            </div>
        </div>

        </div>
    </div>

</section>



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
</body>
</html>