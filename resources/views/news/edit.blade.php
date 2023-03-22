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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

</head>
<body>

@include('layouts.navbar')

<section class="news" id="addnews">

    <div class="container">
        <div class="card">
            <div class="card-heade text-center text-light bg-dark">
                <h2>ADD LATEST NEWS</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('news.update',$news->id) }}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @method('PUT')
                    <div class="container">
                        <div class="row">
                            <div class="mb-3 ">
                                <div class="form-group label-floating">
                                    <label class="control-label">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $news->title }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3">
                                <div class="form-group label-floating">
                                    <label class="control-label">Date</label>
                                    <input type="text" class="form-control" name="dateTime" id="dateTime" value="{{ Carbon\Carbon::parse($news->dateTime)->format('m/d/y') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3">
                                <div class="form-group label-floating">
                                    <label class="control-label">Article</label>
                                    <textarea class="form-control" rows="3" name="article" placeholder="Article" value="">{{old('article') ?? $news->article }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            @foreach (json_decode($news->image, true) as $img)
                            @endforeach
                            @foreach ($news as $new)
                            @endforeach
                            <div class="mb-3">
                                    <label class="form-label">Image</label>
                                    <input class="form-control"  type="file" name="image[]" value="{{old('image')}}" onchange="preview()" multiple >
                                    @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <img id="frame" class="img-fluid" src="{{asset('uploads/news/'.$img )}}" alt="No Available Image">

                        </div>


                        <button type="submit" class="btn btn-sm btn-primary mt-2">Submit</button>
                        <a href="{{ route('news.index') }}" class="btn btn-sm btn-warning mt-2">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

    @include('layouts.footer')

    <script>
         function preview() {
                frame.src = URL.createObjectURL(event.target.files[0]);
            }
    </script>


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

     <script>
        $(function() {
          $('input[id="dateTime"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 1900,
            maxYear: parseInt(moment().format('YYYY'),10)
          });
        });
    </script>
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

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
     <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
     <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
</body>
</html>
