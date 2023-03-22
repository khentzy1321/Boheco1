<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOHECO I</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/int.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel = "stylesheet" href = "{{asset ('resources/Magnific-Popup-master/dist/magnific-popup.css')}}">
    <link rel = "stylesheet" href = "{{asset('resources/animate.css-main/animate.css')}}">

</head>

<style>

.card-header1 {
        overflow: hidden;
        margin-top: 16px;
    }
    .card-header1 h1{
        /* display: inline; */
        float: left;


    }
    .date p{
        display: inline;
    }
    .date .p-date{
        font-weight: 800;
    }
    .card-header2 a{
        float: right;
    }
    .card-header1 span{
        margin-left: 8px;
    }

    hr{
        margin-top: 6px;
    }
</style>
<body>

@include('layouts.navbar')
<section class="news">
    <div class="container">
        <div class="card-header1 text-muted ">
            <h1 class=" text-light">NEWS <i class="fa fa-info-circle" aria-hidden="true"></i></h1>
            <div class="card-header2">
                <a href="{{ route('news.index') }}" class="btn btn-warning"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
            </div>
        </div>
        <hr>

        <section>



     <h2 class=" text-light text-center">{{$news->title}}</h2>
     @foreach (json_decode($news->image, true) as $img)
     <figure><img src="{{  url('uploads/news/' . $img) }}" alt="Image"></figure>
     @endforeach
			<h1></h1>

			<p class="mg text-muted" style="font-weight: 900">Eyes Here <i class="fas fa-eye"></i></p>
            <p class=" text-light">
                {{$news->article}}
            </p>
            <div class="date">
                <p class="p-date  text-light">Publish Date:</p> <p class=" text-center text-muted" style="font-weight: 700">{{ Carbon\Carbon::parse($news->dateTime)->format('M d, Y') }}</p>
            </div>
			</section>
            {{-- <div class="row">
                <div class="card-body">
                    <p class="card-title text-light article-title elipsis text-center">{{$news->title}}</p>
                    <p class="text-light text-center">{{ Carbon\Carbon::parse($news->dateTime)->format('M d, Y') }}</p>

                    <p class="card-text text-dark text-center">
                        {{$news->article}}
                    </p>
                    <div class="container">

                    </div>
            </div>
        </div> --}}
    </div>
</section>


@include('layouts.footer')

    <script>
        function preview() {
                frame.src = URL.createObjectURL(event.target.files[0]);
            }
    </script>


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
