@extends('layout')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<style>
  .banner {
    position: relative;
    width: 100%;
    height: 300px; /* Adjust height as needed */
    background-color: rgb(221, 242, 250); /* Set your desired background color */
    color: #333;
    display: flex;
    align-items: center;
  }

  .text-section {
    flex: 1;
    padding: 20px;
    text-align: center;
  }


  .title-section {
    flex: 1;
    padding: 20px;
    text-align: center;
  }
.title-section h1{
    padding: 0 10px;
    font-family: cursive;
    font-size:100px;
    text-shadow:3px 3px 0 red;
    
}

.rating-text{
    margin-bottom:8px;
}
.left-card {
      float: left;
      width: 45%; /* Adjust width as needed */
      margin-right: 5%;
    }
    .right-card {
      float: right;
      width: 45%; /* Adjust width as needed */
      margin-left: 5%;
    }
.card-title{
    text-align: center!important;
    background-color: #DF0928;
    border-radius: 25px 0 25px 0;
    padding: 5px 15px;
    color:white;
}
h2{
    text-align: center!important;
    color:#333;
}
    @media (max-width: 768px) {
      .left-card, .right-card {
        float: none;
        width: auto;
        margin: 0;
      }
    }
    .popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #ffffff;
    padding: 20px;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    z-index: 9999;
    width:60%;
}

/* Styles for the overlay */
.overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 9998;
}

/* Styles for the form */
form {
    display: grid;
    grid-gap: 10px;
}

form input, form select, form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

form button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}   
</style>

<div class="banner">
  <div class="text-section">
  <div>
          <div>
    <div>
        <div>
            <img src="{{URL('images/award-short-long-2.png')}}" width="40%" alt="">
        </div>
    </div>
</div>
            <h1>Pest Control In Bangalore</h1>
            <h3 class="fs-6"> Book our service, let the good times roll. </h3>
<div class="rating">
    <span class="rating-text">( 7K+ Reviews | 31 Lakh+ Happy Customer )</span>
</div>

              <ul>
               <li style="list-style-type:none;margin-bottom:5px;"><span class="material-symbols-outlined">done_outline</span>Lowest Price in Market | ISO Certified Company</li>
               <li style="list-style-type:none;margin-bottom:5px;"><span class="material-symbols-outlined">done_outline</span>100% Satisfaction or FREE Rework*</li>
              <li style="list-style-type:none;margin-bottom:5px;"><span class="material-symbols-outlined">done_outline</span> Trained Professionals | No Sub Contract</li>
               <li style="list-style-type:none;margin-bottom:5px;"><span class="material-symbols-outlined">done_outline</span> Trusted by 31+ Lakh customers | 15+ Years</li>
              </ul>
        </div>
  </div>
  <div class="title-section">
    <h1>Clean-N-Shine</h1>
  </div>
</div>
</div>
<div class="services">
<div class="section-title">
      <h2>Our Packages</h2>
    </div>
    <div class="container">
  <div class="row">
    <div class="col-md-6 left-card">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Our Regular Packages</h5>
          <h4 style="color:blue;text-align:center;">Pest Control Services</h4>
          <ul>
            <li>Flat</li>
            <li>Villa</li>
            <li>Bungalow</li>
          </ul>
          <button type="button" class="btn btn-danger"style="margin-left:60px;">Call@9035777077</button>
          <button type="button" class="btn btn-primary"  id="openPopup" style="margin-left:60px;">Book Now</button>
        </div>
      </div>
    </div>
    <div class="col-md-6 right-card">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add On Services</h5>
          <p class="card-text">Addon Services is only valid after booking of pest services.</p>
          <ul>
            <li>Home Cleaning @Rs3000</li>
            <li>Sofa Shampoo @ Rs499</li>
            <li>Carpet Shampoo @ Rs499</li>
            <li style="margin-bottom:27px;">Mattress Shampoo @ Rs499</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<br>
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
<!-- Form -->

<!-- Popup container -->
<div class="overlay" id="overlay"></div>
<div class="popup" id="popup">
    <h2>Book Services</h2>
    <form  method="post" action="{{ url('/storetoquery')}}">
      @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="mobile">Mobile Number:</label>
        <input type="tel" id="mobile" name="mobile" required>

        <label for="address">Address:</label>
        <textarea  id="address" name="address" required></textarea>

        <label for="service">Service:</label>
        <select id="service" name="service">
        <option value="Cleaning">Cleaning Service</option>
            <option value="Painting">Painting Service</option>
            <option value="Pest">Pest Control</option>
            <option value="Marble">Marble Polish</option>
            <option value="Bathroom">Bathroom Cleaning</option>
            <option value="Appliances">Appliances Repairing</option>
        </select>

        <button type="submit">Submit</button>
    </form>
</div>

<script>
document.getElementById("openPopup").addEventListener("click", function() {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("popup").style.display = "block";
});


</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@endsection