<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('img/logo.png')}}" />

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{asset('vendor/lightbox/dist/ekko-lightbox.css')}}">

    <!-- Main CSS -->
    <!-- Fontawesome --> <!-- Bootstrap CSS -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/app.css') }}">
    <!-- CUSTOM -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
    <title>Rhafi Personal Web</title>

</head>

<body id="page-top" style="font-family: 'Montserrat', sans-serif;">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{asset('img/logo-navbar.png')}}" alt=""
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
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
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
    <footer class="pt-4">
        <!-- Copyright -->
        <div class="bg-dark text-center text-light py-3">© 2019 rhafiihza</div>
    </footer>

    


    <!-- Optional JavaScript -->
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
</body>

</html>