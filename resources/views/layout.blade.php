<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{URL('public/images/icon.jpeg')}}" type="image/x-icon">
    <title>Clean-N-Shine</title>
    <style>
       * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .navbar {
        background-color: white;
        text-align: center;
        padding: 10px 0;
    }
    .navbar img {
    vertical-align: middle;
    height: 60px; /* Adjust the height as desired */
    width: auto; /* Maintain aspect ratio */
    margin-right: 10px; /* Add some spacing between the image and text */
}
    .navbar a {
        color: #333;
        text-decoration: none;
        padding: 15px 20px;
        display: inline-block;
    }
    .material-symbols-outlined {
            vertical-align: middle; 
        }
   
    .navbar .dropdown {
        position: relative;
        display: inline-block;
    }
    
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 160px;
        z-index: 1;
    }
    
    .dropdown:hover .dropdown-content {
        display: block;
    }
    
    .dropdown-content a {
        color: #333;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }
    
    .dropdown-content a:hover {
        background-color: white;
        color:red;
    }
    .footer {
     background-color: #333;
     color: #fff;
     padding: 10px;
     text-align: center;
     display: flex;
     justify-content: space-between;
     align-items: center;
     }
     .footer p {
        margin-top: 5px;
     }
     .social-icons {
         margin-top: 8px;
         
     }
     .social-icons a {
         color: #fff;
         text-decoration: none;
         margin: 0 10px;
         font-size: 24px;
     }
    </style>
</head>
<body>
<div class="navbar">
<a href="/"><img src="{{URL('images/navicon.JPG')}}" alt="Icon" ></a>
    <div class="dropdown">
        <a href="#">Cleaning Services<span class="material-symbols-outlined">expand_more</span></a>
        <div class="dropdown-content">
            <a href="/services/bathroom-cleaning">Kitchen And Bathroom Cleaning</a>
            <a href="/services/home-cleaning">Sofa And Carpet Cleaning</a>
            <a href="/services/home-cleaning">Residential Cleaning</a>
        </div>
    </div>
    
    <div class="dropdown">
        <a href="/services/pest-control" >Pest Control</a>
    </div>

    <div class="dropdown">
        <a href="#">Interiors<span class="material-symbols-outlined">expand_more</span></a>
        <div class="dropdown-content">
            <a href="/services/home-painting">Interiors for Office & Residence</a>
            <a href="/services/home-painting">Painting</a>
            <a href="/services/home-painting">POP</a>
        </div>
    </div>

    <div class="dropdown">
        <a href="#">Floor Polish<span class="material-symbols-outlined">expand_more</span></a>
        <div class="dropdown-content">
            <a href="/services/marble-polish">Marble And Granite Polishing</a>
        </div>
    </div>

    <div class="dropdown">
        <a href="#">Repairing<span class="material-symbols-outlined">expand_more</span></a>
        <div class="dropdown-content">
            <a href="/services/appliances-repairing">Electrical Contractors</a>
        </div>
    </div>
</div>


 <!-- Your content here -->
 <div>@yield('content')</div>

 
<footer class="footer">
    <p>&copy; Copyright 2024 Clean-N-Shine. All rights reserved.</p>
    <div class="social-icons">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
    </div>
</footer>
</body>
</html>