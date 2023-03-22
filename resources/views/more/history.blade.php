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
        <div class="card  shadow" style="opacity: 0.9;">
            <div class="card-body">
                <h1 class="text-center" style="font-family:Times New Roman;">HISTORY</h1>
            </div>
            <hr>

            <div class="mt-3">
                <p class="justified-text">The co-op’s official seal is a gear with nine (9) toothed wheels to represent the original nine (9) municipalities that comprised the area coverage of the co-op which were Tubigon, Clarin, Sagbayan, Catigbian, San Isidro, Balilihan, Calape, Loon and Antequera.

                    Inscribed at the inner portion of the gear are small nipa huts to represent most of the typical households found in our barangays which were energized as shown in the form of lightning streaks. A 3-phase line represents the energization of the backbone lines of the nine (9) municipalities even passing and crossing the Chocolate Hills as what Bohol is known for.
                    
                    August 11, 1971 indicates the date when the co-op was registered and incorporated and Tubigon, Bohol below is the municipality where the main headquarters of the co-op is located.
                </p>
                <p class="text-center"><strong><h5>BOHECO I HEADQUARTERS</h5></strong></p>
                <p class="justified-text">Most of the towns served by the co-op are classified as lower middle class with a handful considered as affluent and several are living below the poverty level.</p>


                <p class="text-center"><strong><h5>First town energization – Dec. 30, 1974, Tubigon with Gen. Pedro Dumol as the guest of honor.</h5></strong></p>
                <p class="justified-text">Then its neighboring seventeen (17) towns clamored for its inclusion, prompting the co-op officials to avail an additional loan from NEA amounting to Php17M which was signed by Board President Melchor P. Monreal and Administrator Pedro Dumol on January 12, 1980.
                    <br>
                    <br>
                    The co-op is a residential-based, approximately 56.85% of the total KWHR sold. Commercial and industrial loads are about 32.32%, while the combine irrigation , water system, public buildings and streetlights load is approximately 10.83%.</p>
                    
                <p class="text-center"><strong><h5>Bohol I Electric Cooperative, Inc. brought the first streaks of energization into a sleepy province just as the decade of the 70’s was coming into view.</h5></strong></p>
                <p class="justified-text">From its infant stages, BOHECO I’s coverage area had been the northern and western towns of the province, eventually expanding to most of the interior towns in the west.
                    <br>
                    <br>
                    Originally, the co-op was only serving nine (9) municipalities with an initial cash outlay in a form of loan from NEA in the amount of Php2,958,000.00. The loan contract was signed by its first Board President, Mr. Simeon P. Luayon and NEA Administrator Pedro G. Dumol on October 1, 1971.
                    <br>
                    <br>
                    On December 30, 1974, the co-op was able to energize the backbone lines in Tubigon from the location of its power plant in barangay Maca-as, to Poblacion, Tubigon running a line of approximately 4 kms. In 1975, the rest of the backbone lines of the remaining eight (8) original towns were energized.</p>
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