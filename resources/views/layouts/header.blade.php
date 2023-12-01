<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="title" content="{{get_setting('meta_title')}}">
      <meta name="keywords" content="{{get_setting('meta_key')}}">
      <meta name="description" content="{{get_setting('meta_description')}}">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="{{URL::to('/')}}/public/images/settings/{{get_setting('fav_icon')}}" type="image/x-icon"/>
      <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
      <title>Global Truck Academy</title>
   </head>
   <body>
      <div class="top_header re destop">
         <div class="container">
            <div class="row">
               <div class="col-4">
                  <div class="new_btun">
                     <a  href="tel:2895051000"><i class="fa fa-phone" aria-hidden="true"></i> {{get_setting('phone')}}</a>
                  </div>
               </div>
               <div class="col-4">
                  <div class="new_btun">
                     <a  href = "mailto:admin@globaltruckacademy.com"> <i class="fa fa-envelope-o" aria-hidden="true"></i> {{get_setting('email')}}</a>
                  </div>
               </div>
               <div class="col-4">
                  <div class="new_btun">
                     <p > <i class="fa fa-clock-o" aria-hidden="true"></i>  {{get_setting('operating_hours')}}</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="top_header re_phone phone">
         <div class="container">
            <div class="row">
               <div class="col-2">
                  <div class="new_btun">
                     <a  href="tel:289-505-1000"><i class="fa fa-phone" aria-hidden="true"></i> </a>
                  </div>
               </div>
               <div class="col-1">
                  <div class="new_btun">
                     <a  href = "mailto:admin@globaltruckacademy.com"> <i class="fa fa-envelope-o" aria-hidden="true"></i> </a>
                  </div>
               </div>
               <div class="col-9">
                  <div class="new_btun">
                     <p > <i class="fa fa-clock-o" aria-hidden="true"></i>  {{get_setting('operating_hours')}}</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <header>
         <nav  class="navbar navbar-expand-lg  navbar-dark bg-primary navbar-header" id="myHeader" >
            <div class="container">
               <div class="logo wow fadeInLeft" >
                  <a class="navbar-brand fw-bold" href="{{route('/')}}"><img src="{{URL::to('/')}}/public/frontend/photo/site-logo.jpg"></a>
               </div>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fa fa-align-justify" aria-hidden="true"></i>
               </button>
               <div class="collapse navbar-collapse animate__animated wow fadeInRight" id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link <?php if(request()->is('/')){ echo "active"; } ?>" aria-current="page" href="{{route('/')}}"><span>Home</span></a>
                    </li>    
                     <li class="nav-item">
                        <a class="nav-link <?php if(request()->is('about')){ echo "active"; } ?>" href="{{route('about')}}"><span> About Us</span></a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link "  href="#" >
                        <span>Programs <i class="fa fa-caret-down" aria-hidden="true"></i></span> 
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                           <li><a class="dropdown-item" href="{{route('air-brake')}}">Air Brake Endorsement</a></li>
                           <li><a class="dropdown-item" href="{{route('dz-license-course')}}">DZ License Course</a></li>
                           <li><a class="dropdown-item" href="{{route('az-license-course')}}">AZ License Course</a></li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link <?php if(request()->is('contact')){ echo "active"; } ?>" href="{{route('contact')}}" tabindex="-1" aria-disabled="true"><span>Contact Us</span></a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link "  href="#"><span> Policies <i class="fa fa-caret-down" aria-hidden="true"></i></span></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                           @php
                           $links = get_header_cms();
                           @endphp
                           @foreach($links as $key => $link)
                           <li><a class="dropdown-item"  href="{{route('cms',$link->slug)}}"><span>{{$link->page_name}}</span></a> </li>
                           @endforeach
                        </ul>
                     </li>
                    
                  </ul>
               </div>
               <div class="bgr new_btn d-none">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">Enroll Now</a>
               </div>
            </div>
         </nav>
      </header>