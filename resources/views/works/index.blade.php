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
    <section class="container" id="works">
        <h1 class="text-center mt-lg-5 mb-lg-5">Works</h1>
        <div class="row">
        @foreach($works as $data)
            <!-- Works 1 -->
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
    <!-- /.container -->
    <!-- ABOUT -->
    <section class="jumbotron jumbotron-fluid" id="about">
        <div class="container text-center p-lg-5">
            <img src="{{asset('img/6.jpg')}}" alt="" class="rounded-circle" width="250px" height=250px">
            <h1 class=" display-5 ">RHAFI IHZA RAJA</h1>
            <p class=" lead ">This is a modified jumbotron that occupies the entire horizontal space of its parent.
            </p>
        </div>
    </section>
    <!-- SKILLS -->
    <section class=" container p-lg-5">
        <div class="row">
            <div class="col text-center pb-4">
                <h1 id="section3">SKILLS</h1>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <h4>PHP NATIVE</h4>
                <h1>0%</h1>
            </div>
            <div class="col">
                <h4>LARAVEL</h4>
                <h1>0%</h1>
            </div>
            <div class="col">
                <h4>CODEIGNITER</h4>
                <h1>0%</h1>
            </div>
        </div>
    </section>

    @endsection
    