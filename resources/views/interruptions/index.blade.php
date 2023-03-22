<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOHECO I</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/int.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css
" rel="stylesheet">

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
</style>
<body>
    @include('layouts.navbar')
    <section class="advisory">
        <div class="container">
            <div class="card1">
                <div class="card-header1 text-muted ">
                    <h1 class=" text-light">CURRENT INTERRUPTIONS</h1>
                    @role('admin')
                    <div class="card-header2">
                        <a href="{{route('int.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                    </div>
                    @endrole
                </div>

                @foreach ($interruptions as $int)
                <div class="container mb-2">
                    <div class="card mt-2">
                        <div class="card-body">
                            <h4 class="advisory-title text-center">{{$int->created_at->isoFormat('MMMM d, Y')}}</h4>
                        </div>
                        <hr class="mb-2">
                        <div class="container">
                            <p><strong>WHAT:</strong> {{$int->what}}</p>
                            <p><strong>WHEN:</strong> {{$int->dateTime}}</p>
                            <p><strong>WHERE:</strong> {{$int->where}}</p>
                            <p><strong>WHY:</strong> {{$int->why}}</p>
                            </p>

                            <p class="text-center">
                                We sincerely apologize for the inconvenience this will bring you. We
                                request
                                your patience and understanding on this matter. Rest assured that our team will exert best
                                effort to restore the power the soonest possible time.
                                For further queries, please call our hotline numbers at <strong> 09177147493 </strong> or <strong> 09199950240</strong>
                            </p>
                        </div>
                        @role('admin')
                        <div class="card-footer1 mb-4 text-center ">
                            <a href="{{ route('int.edit', $int) }}" class="btn btn-sm btn-success">Edit</a>
                            <form action="{{ route('int.destroy', $int->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="button" data-placement="bottom" onclick="deleteInterruptions()" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
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
                {{ $interruptions->links() }}
            </div>
        </div>
        @include('sweetalert::alert')
    </section>

    @include('layouts.footer')

    <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js
"></script>

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
        <script type='text/javascript' src='https://boheco1.com/wp-includes/js/wp-embed.min.js?ver=5.4.12'>
    </script>
    <script type='text/javascript' src='https://boheco1.com/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>


    <script>
    function deleteInterruptions() {
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

