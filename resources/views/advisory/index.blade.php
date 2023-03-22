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


</head>

<style>
    .card-header1 {
        overflow: hidden;
        /* background-color: #f1f1f1; */
        padding: 20px 10px;
    }
    .card-header1 h1{
        /* display: inline; */
        float: left;
        color: black;

    }
    .card-header2 a{
        float: right;
    }

    hr{
        margin-top: 6px;
    }
    .hed2 .date{
        float: left;
    }
    .hed1 h4{
        float: center;
    }


</style>
<body>

    @include('layouts.navbar')


    <section class="advisory">
        <div class="container">
            <div class="card1">
                <div class="card-header1 text-muted ">
                    <h1 class=" text-light">CURRENT ADVISORY</h1>
                    @role('admin')
                    <div class="card-header2">
                        <a href="{{route('advisory.create')}}" class="btn btn-primary"><i class="fas fa-plus" aria-hidden="true"></i></a>
                    </div>
                    @endrole
                </div>

                @foreach ($advisories as $adv)
                <div class="container mb-2">
                    <div class="card mt-2 ">
                        <div class="card-body">

                            <h4 class="advisory-title text-center">{{$adv->place}}</h4>

                                <p class="text-muted date">{{ Carbon\Carbon::parse($adv->dateTime)->format('M d, Y') }}</p>

                            <hr class="mb-2">
                            <p class="text-center">{{$adv->info}}</p>
                        </div>

                        @role('admin')
                        <div class="card-footer1 mb-4  text-center ">
                            <a href="{{ route('advisory.edit', $adv) }}" class="btn btn-sm btn-success"><i class="fas fa-pen"></i></a>

                            <form action="{{ route('advisory.destroy', $adv->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="button" data-placement="bottom" onclick="deleteAdvisory()" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                        @endrole
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="card-footer py-4">
            <div class="d-flex justify-content-center">
                {{ $advisories->links() }}
            </div>
          </div>
        </div>
    @include('sweetalert::alert')
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

<script type='text/javascript' src='https://boheco1.com/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    function deleteAdvisory() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You want to delete this?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Proceed'
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit the form
                document.forms[0].submit();
            }
        });
    }
</script

</body>
</html>




