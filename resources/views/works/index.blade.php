@extends('layouts.main')

@section('content')

<header class="masthead"  src="{{asset('images/background.png')}}" data-anijs="if: scroll, on: window, do: zoomIn animated, before: scrollReveal">
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <img src="{{asset('images/foto_header.jpg')}}" class="card-img-top img-thumbnail" alt="...">
                </div>
                <div class="col-4 align-middle">
                    <h1 class="display-4 mb-5">About Me</h1>
                    <p class="lead">Hi, my name is Rhafi i am Web Developer and also like to design as my hobby.</p>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Page Content -->

<!-- Works -->
<section class="container" id="works" data-anijs="if: scroll, on: window, do: zoomIn animated, before: scrollReveal">
    <h1 class="text-center mt-5">Works</h1>
    <hr class="w-25">
    <div class="row">
    <div class="card-columns">
        <div class="card">
            <img src="{{asset('images/reachtoforgive.png')}}" class="card-img" alt="...">
            <div class="card-img-overlay">
                <h3 class="card-title"><a href="https://reachtoforgive.com/" class="btn btn-lg btn-outline-primary">Website Reach To Forgive</a></h3>
            </div>
        </div>
        <div class="card">
            <img src="{{asset('images/t-shirt.png')}}" class="card-img" alt="...">
            <div class="card-img-overlay">
                <h3 class="card-title"><a href="#" class="btn btn-lg btn-outline-primary">Design T-Shirt</a></h3>
            </div>
        </div>
        <div class="card">
            <img src="{{asset('images/website-penggajian.png')}}" class="card-img" alt="...">
            <div class="card-img-overlay">
                <h3 class="card-title"><a href="#" class="btn btn-lg btn-outline-primary">Website Penggajian Laboratorium Psikologi</a></h3>
            </div>
        </div>
        <div class="card">
            <img src="{{asset('images/web-psi.png')}}" class="card-img" alt="...">
            <div class="card-img-overlay">
                <h3 class="card-title"><a href="#" class="btn btn-lg btn-outline-primary">Website PSI</a></h3>
            </div>
        </div>
    </div>
</section>
<!-- /.Works -->

<!-- SKILLS -->
<section class="container mb-5" id="skills" data-anijs="if: scroll, on: window, do: zoomIn animated, before: scrollReveal">
    <h1 id="section3" class="text-center mt-5">SKILLS</h1>
    <hr class="w-25">
    <!-- CIRCLE 1 -->
    <div class="container-custom">
        <h3 class="text-center">PHP NATIVE</h3>
        <div class="gauge-container">
            <svg class="gauge" viewBox="0 0 150 150">
            <circle class="rail" r="67" cx="75" cy="75"></circle>

            <circle class="progress" r="67" data-target="90" cx="75" cy="75"></circle>
            </svg>

            <span class="center percentage">
                <span class="value">0</span>
                <span class="percentSymbol">%</span>
            </span>
        </div>
    </div>
    <!-- CIRCLE 2 -->
    <div class="container-custom">
        <h3 class="text-center">CODEIGNITER</h3>
        <div class="gauge-container">
            <svg class="gauge" viewBox="0 0 150 150">
            <circle class="rail" r="67" cx="75" cy="75"></circle>

            <circle class="progress" r="67" data-target="75" cx="75" cy="75"></circle>
            </svg>

            <span class="center percentage">
                <span class="value">0</span>
                <span class="percentSymbol">%</span>
            </span>
        </div>
    </div>
    <!-- CIRCLE 3 -->
    <div class="container-custom">
        <h3 class="text-center">LARAVEL</h3>
        <div class="gauge-container">
            <svg class="gauge" viewBox="0 0 150 150">
            <circle class="rail" r="67" cx="75" cy="75"></circle>

            <circle class="progress" r="67" data-target="55" cx="75" cy="75"></circle>
            </svg>

            <span class="center percentage">
                <span class="value">0</span>
                <span class="percentSymbol">%</span>
            </span>
        </div>
    </div>
    <!-- CIRCLE 4 -->
    <div class="container-custom">
        <h3 class="text-center">PHOTOSHOP</h3>
        <div class="gauge-container">
            <svg class="gauge" viewBox="0 0 150 150">
            <circle class="rail" r="67" cx="75" cy="75"></circle>

            <circle class="progress" r="67" data-target="65" cx="75" cy="75"></circle>
            </svg>

            <span class="center percentage">
                <span class="value">0</span>
                <span class="percentSymbol">%</span>
            </span>
        </div>
    </div>
    <!-- CIRCLE 5 -->
    <div class="container-custom">
        <h3 class="text-center">ILLUSTRATOR</h3>
        <div class="gauge-container">
            <svg class="gauge" viewBox="0 0 150 150">
            <circle class="rail" r="67" cx="75" cy="75"></circle>

            <circle class="progress" r="67" data-target="40" cx="75" cy="75"></circle>
            </svg>

            <span class="center percentage">
                <span class="value">0</span>
                <span class="percentSymbol">%</span>
            </span>
        </div>
    </div>
</section>
<!--/.SECTION SKILLS-->
@endsection