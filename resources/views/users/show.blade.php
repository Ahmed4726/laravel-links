<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Laravel Links</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN6b1qRO1NqZaC4alpLjdvJSQT9SAnxIM" crossorigin="anonymous">

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet"/>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class='col-md-12'>
                <div class='text-end mt-3'>
                    <a href='#' class='btn btn-dark'>Claim your Linktree</a>  
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-md-6 offset-md-3 text-center">
            <img src="{{ asset($user->profile_link) }}" alt="Profile Image" class="mb-3 rounded-circle profile-pic" width="100" height="100">
            <div class="col-md-6">
   
        </div>
            <div>
                <b><span>@</span>{{$username}}</b>
            </div> 
            <div class="text-center mt-3">
                {{$bio}}
            </div> 
            <h4 class="mt-3">Link</h4>
            @foreach($user->links as $link)
                    <div class="link">
                        <a
                            class="user-link d-block p-3 mt-3 mb-4 rounded-pill border-none text-decoration-none h4 text-center"
                            style="background-color:lightgrey; color: {{ $textColor }}"
                            href="{{ $link->link }}"
                            target="_blank"
                            rel="nofollow"
                            data-link-id="{{ $link->id }}"
                        >{{ $link->name }}</a>
                    </div>
                @endforeach

                <div class="row mt-3">
    <h4 class="mt-3">Banners</h4>
    @foreach($banners as $banner)
        <div class="col-md-4 mb-3">
            <img src="{{ asset($banner->banner_link) }}" alt="Banner Image" class="mb-3 rounded profile-pic" width="180" height="180">
        </div>
    @endforeach
</div>
            </div>
        </div>
        
        <h4 class="mt-3 text-center">Advertise on LinkTree</h4>
        <div class='text-center mt-5 mb-3'>
        <a class='text-decoration-none text-bolder' style='color:#B688BC;' href="{{route('welcome')}}">Lnk.bio</a>
        </div>
</div>
         
    </body>
     <!-- Bootstrap core JS-->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</html> 
