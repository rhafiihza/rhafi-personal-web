<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('images/logo.png')}}" />

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{asset('vendor/lightbox/dist/ekko-lightbox.css')}}">

    <!-- Main CSS -->
    <!-- Fontawesome --> 
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/app.css') }}">
    <!-- CUSTOM -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 

    <!-- AniCollection.css library -->
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">

    <title>Rhafi Personal Web</title>

    <!-- <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script> -->
</head>

<body id="page-top" style="font-family: 'Montserrat', sans-serif;">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white"  data-anijs="if: scroll, on: window, do: zoomIn animated, before: scrollReveal">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{asset('images/logo-navbar.png')}}" alt=""
                    style="width: 150px; height:70px ;"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#page-top">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#works">Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#section3">Skills</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="container-fluid bg-dark pt-4">
        <!-- Copyright -->
        
        <div class="container text-light py-5">
            <div class="row">
            <div class="col-4 text-left">
            <ul style="list-style-type: none;">
                <li>
                    <i class="fa fa-linkedin-square" aria-hidden="true"></i><a href="www.linkedin.com/in/rhafiihza" class="badge badge-primary">LinkedIn</a>
                </li>
                <li>
                    <i class="fa fa-envelope-o" aria-hidden="true"></i><span class="badge badge-primary">rhafiihzaraja@gmail.com</span>
                </li>
            </ul>
            </div>    
            <div class="col-4 text-center">
                © 2019 rhafiihza        
            </div>
            <div class="col-4 text-right">
                <ul style="list-style-type: none;">
                    <li>
                    <a href="https://twitter.com/rhafiihza" class="badge badge-primary">Twitter</a><i class="fa fa-twitter-square" aria-hidden="true"></i>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/rhafiihza/" class="badge badge-primary">Instagram</a><i class="fa fa-instagram" aria-hidden="true"></i>
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </footer>
        <!-- Optional JavaScript -->
        <!-- AniJS Core File -->
        <script src="{{asset('js/anijs-min.js')}}"></script>

        <!-- ScrollReveal Helper -->
        <script src="{{asset('js/helpers/scrollreveal/anijs-helper-scrollreveal-min.js')}}"></script>
        <script src=""></script>
        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="{{asset('vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    
        <!-- Plugin JS-->
        <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <script src="{{asset('vendor/lightbox/dist/ekko-lightbox.js')}}"></script>
    
        <!-- Custom JS for Scrolling when Clicked -->
        <script src="{{asset('js/scrolling-nav.js')}}"></script>
        <script src="{{asset('js/lightbox.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
        <script src="{{asset('js/same.js')}}"></script>
</body>

</html>