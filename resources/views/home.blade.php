@extends('layout')
@section('content')
<style>
    body{
        background-color:antiquewhite;"
    }
    .section-title h3 {
    padding-bottom: 10px;
    padding-top:20px;
    }
    .icon{
        text-decoration:none;
        color:black;
    }

div {
    display: block;
}
body {
    font-family: 'Poppins';
    color: #444444;
    background: #fff6fb;
}

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<body>
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{URL('images/image1.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{URL('images/image2.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{URL('images/image3.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{URL('images/image4.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{URL('images/image5.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{URL('images/image6.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{URL('images/image7.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container">
    <div class="section-title">
        <h3>Clean-N-Shine Services</h3>
    </div>
    <div class="row sr-box text-center">
            <div class="col-4 col-xs-4 col-sm-3 col-md-3 col-lg-2 mb-4">
                <a class="icon" href="/services/home-cleaning">
                    <div class="blogBox">
                        <p class="img"><img src="{{URL('images/home-cleaning.png')}}"></p>
                        <p class="lead">Home Cleaning</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-xs-4 col-sm-3 col-md-3 col-lg-2 mb-4">
                <a class="icon" href="/services/home-painting">
                    <div class="blogBox">
                        <p class="img"><img src="{{URL('images/home-painting.png')}}"></p>
                        <p class="lead">Home Painting</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-xs-4 col-sm-3 col-md-3 col-lg-2 mb-4">
                <a class="icon" href="/services/pest-control">
                    <div class="blogBox">
                        <p class="img"><img src="{{URL('images/pest-control.png')}}"></p>
                        <p class="lead">Pest Control</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-xs-4 col-sm-3 col-md-3 col-lg-2 mb-4">
                <a class="icon" href="/services/marble-polish">
                    <div class="blogBox">
                        <p class="img"><img src="{{URL('images/marble-polish.png')}}"></p>
                        <p class="lead">Marble Polish</p>
                    </div>
                </a>
            </div>
            <br>
            <div class="col-4 col-xs-4 col-sm-3 col-md-3 col-lg-2 mb-4">
                <a class="icon" href="/services/appliances-repairing">
                    <div class="blogBox">
                        <p class="img"><img src="{{URL('images/ac_repair.png')}}"></p>
                        <p class="lead">AC Service and Repair</p>
                    </div>
                </a>
            </div>
            
            

            <div class="col-4 col-xs-4 col-sm-3 col-md-3 col-lg-2 mb-4 ">
                <a class="icon" href="/services/bathroom-cleaning">
                    <div class="blogBox">
                        <p class="img"><img src="{{URL('images/toilet.png')}}"></p>
                        <p class="lead">Bathroom DeepCleaning</p>
                    </div>
                </a>
            </div>

        </div>
</div>

<section class="container mb-0 pb-0">
    <div>
     <h3 style="margin-bottom:-20px">Just For You <i class="badge rounded-pill bg-danger mb-3" style="font-size: 1rem;">Newly Launched</i>
        </h3>
    <div><br>

    <div class="row">
  <div class="col-sm-4 mb-3 mb-sm-0">
    <div class="card">
      <img src="{{URL('images/1240.png')}}">
    </div>
  </div>
  <div class="col-sm-4">
  <div class="card">
      <img src="{{URL('images/1240.png')}}">
    </div>
  </div>
  <div class="col-sm-4">
  <div class="card">
      <img src="{{URL('images/1240.png')}}">
    </div>
  </div>
</div>
</section>
<br>
<section class="why-us bg-white" id="why-us">
    <div class="container">
        <div class="section-title mb-3 ">
            <h3>Why choose Us ? </h3>
            <!--<div class="divider div-transparent div-dot"></div>-->
        </div>
        <div class="row justify-content-center">
            <div class="col-6 col-lg-2 text-center p-0">
                <div class="h-100 p-3 border-sm-end border-sm-bottom">
                    <figure><img width="60" src="{{URL('images/painter.svg')}}"></figure>
                    <h5 class="mb-0 mt-2">Trained Professional</h5>
                </div>
            </div>
            <div class="col-6 col-lg-2 text-center p-0">
                <div class="h-100 p-3 border-sm-bottom">
                    <figure><img width="60" src="{{URL('images/certificate.svg')}}"></figure>
                    <h5 class="mb-0 mt-2">Asian Paint Certified</h5>
                </div>
            </div>
            <div class="col-6 cols-2  col-lg-2 text-center p-0">
                <div class="h-100 p-3 border-sm-end border-sm-bottom">
                    <figure><img width="60" src="{{URL('images/guarantee-1.svg')}}"></figure>
                    <h5 class="mb-0 mt-2">100% Guarantee</h5>
                </div>
            </div>
            <div class="col-6 cols-2 col-lg-2 text-center p-0">
                <div class="h-100 p-3 border-sm-bottom">
                    <figure><img width="60" src="{{URL('images/best-price.svg')}}"></figure>
                    <h5 class="mb-0 mt-2">Best Price Best Work</h5>
                </div>
            </div>
            <div class="col-6 cols-2 col-lg-2 text-center p-0">
                <div class="h-100 p-3 border-sm-end">
                    <figure><img width="60" src="{{URL('images/guarantee.svg')}}"></figure>
                    <h5 class="mb-0 mt-2">1 Year Service Warranty</h5>
                </div>
            </div>
            <div class="col-6 cols-2 col-lg-2 text-center p-0">
                <div class="h-100 p-3">
                    <figure><img width="60" src="{{URL('images/network.svg')}}"></figure>
                    <h5 class="mb-0 mt-2">No Subcontract</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
@endsection