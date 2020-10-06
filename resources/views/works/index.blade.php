@extends('layouts.main')

@section('content')
<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
    <!-- <div class="container h-100">
        <div class="row h-100 align-items-center">
        </div>
    </div> -->
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <img src="{{asset('img/foto_header.jpg')}}" class="card-img-top img-thumbnail" alt="...">
                </div>
                <div class="col-4 align-middle">
                    <h1 class="display-4 mb-5">About Me</h1>
                    <p class="lead">Hi, i'm Back End Developer using Framework Laravel and Codeigniter for PHP Programming Language, other skills that i have HTML, CSS, Javascript and also like to design as my hobby using Adobe Illustrator and Adobe Photoshop</p>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Page Content -->
<!-- Works -->
<section class="container" id="works">
    <h1 class="text-center mt-5 mb-5">Works</h1>
    <div class="row">
        <div class="bg-pill-1">
            <div class="row">
                <div class="col-lg-4 mb-5 mt-5"><img src="{{asset('img/design.png')}}" style="width: 200px; height:200px;" alt=""></div>
                <div class="col-lg-8 mb-5 mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ipsum vel doloremque fuga. Tempore consequuntur ullam vitae consequatur odio est sequi ipsa! Ab vel, quod consectetur natus ea exercitationem dolor.</div>
            </div>
        </div>
        <div class="bg-pill-2 shadow-lg">
            <div class="col-lg-4 mb-5 mt-5"><img src="{{asset('img/design.png')}}" style="width: 200px; height:200px;" alt=""></div>
            <div class="col-lg-8 mb-5 mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ipsum vel doloremque fuga. Tempore consequuntur ullam vitae consequatur odio est sequi ipsa! Ab vel, quod consectetur natus ea exercitationem dolor.</div>
        </div>
        
    </div>
    <!-- /.row -->
</section>
<!-- /.Works -->
<!-- /.container -->
<!-- ABOUT -->
<section class="jumbotron jumbotron-fluid" id="about">
    <h1 class="text-center section-title">About</h1>
    <hr class="w-25">
    <div class="container text-center p-lg-5">
        <img src="{{asset('img/profile.jpg')}}" alt="" class="rounded-circle" width="200px" height=250px">
        <h1 class=" display-5 ">RHAFI IHZA RAJA</h1>
        <p class=" lead ">This is a modified jumbotron that occupies the entire horizontal space of its parent.
        </p>
    </div>
</section>
<!--/.SECTION ABOUT-->
<!-- SKILLS -->
<section class="container" id="skills">
            <h1 id="section3" class="text-center mb-lg-5">SKILLS</h1>
    <div class="flex-wrapper">
        <div class="single-chart">
            <h4 class="text-center">CodeIgniter</h4>
            <svg viewBox="0 0 36 36" class="circular-chart orange">
                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                <path class="circle" stroke-dasharray="30, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                <text x="18" y="20.35" class="percentage">30%</text>
            </svg>
        </div>
        <div class="single-chart">
            <h4 class="text-center">Laravel</h4>
            <svg viewBox="0 0 36 36" class="circular-chart green">
                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                <path class="circle" stroke-dasharray="60, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                <text x="18" y="20.35" class="percentage">60%</text>
            </svg>
        </div>
        <div class="single-chart">
            <h3 class="text-center">Native PHP</h3>
            <svg viewBox="0 0 36 36" class="circular-chart blue">
                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                <path class="circle" stroke-dasharray="90, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                <text x="18" y="20.35" class="percentage">90%</text>
            </svg>
        </div>
    </div>
</section>
<!--/.SECTION SKILLS-->
@endsection