@extends('layouts.main')

@section('content')
<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
        </div>
    </div>
</header>
<!-- Page Content -->
<!-- Works -->
<section class="container" id="works">
    <h1 class="text-center mt-lg-5 mb-lg-5">Works</h1>
    <div class="row">
        @foreach($works as $data)
        <div class="col-4 mb-4">
            <a href="" class="box4">
                <div class="card border-0 shadow">
                    <img src="{{ $data->icon }}" class="card-img-top" alt="...">
                    <div class="card-body text-center box-content">
                        <h5 class="card-title mb-0 text-white bg-info">{{ $data->title }}</h5>
                        <div class="card-text text-white-50 bg-info">{{ $data->content }}</div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <!-- /.row -->
</section>
<!-- /.Works -->
<!-- /.container -->
<!-- ABOUT -->
<section class="jumbotron jumbotron-fluid" id="about">
    <h1 class="text-center">About</h1>
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
