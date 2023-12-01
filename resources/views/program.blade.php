@extends('layouts.front_main')
@section('content')
<section class="new_sention_team">
   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active wow fadeInLeft" data-wow-delay="1s">
            <img src="https://pccleaning.in/global_truck_academy/public/images/settings/1683868805.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption new_line">
               <h1>Our Programs</h1>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="our_what_we_do py-lg-5 py-md-5 py-sm-5 py-3 facts ">
   <div class="container reveal">
      <div class="row mt-lg-5 mt-2 " >
         <div class="col-md-4 col-sm-6 col-12">
            <div class="box_new">
               <div class="new_what_whe_do w3-animate-left">
                  <div class="shape-two"></div>
                  <img src="https://pccleaning.in/global_truck_academy/public/frontend/photo/services/new_tr.jpg" class="image d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy">
                  <div class="overlay">
                     <div class="text">
                        <h4> AZ License Course</h4>
                     </div>
                  </div>
                  <div class="bgr"><a href="{{route('az-license-course')}}" class="btn btn-secondary"> Read More</a></div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-12">
            <div class="box_new">
               <div class="new_what_whe_do w3-animate-left">
                  <div class="shape-two"></div>
                  <img src="https://pccleaning.in/global_truck_academy/public/frontend/photo/services/hgt.jpg" class="image d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy">
                  <div class="overlay">
                     <div class="text">
                        <h4>DZ License Course</h4>
                     </div>
                  </div>
                  <div class="bgr"><a href="{{route('dz-license-course')}}" class="btn btn-secondary"> Read More</a></div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-12">
            <div class="box_new">
               <div class="new_what_whe_do w3-animate-left">
                  <div class="shape-two"></div>
                  <img src="https://pccleaning.in/global_truck_academy/public/frontend/photo/services/new_yr.jpg" class="image d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy">
                  <div class="overlay">
                     <div class="text">
                        <h4>Air Brake Endorsement</h4>
                     </div>
                  </div>
                  <div class="bgr"><a href="{{route('air-brake')}}" class="btn btn-secondary"> Read More</a></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="new_programs py-lg-5 py-md-5 py-sm-5 py-3 wow fadeIn" data-wow-delay="0.1s" >
   <div class="container ">
      <div class="row py-5 align-items-center">
         <!--<div class="about_us_tittle new_line text-center w3-animate-top wow fadeInDown anm-2" data-wow-duration="1s" data-wow-delay=".5s" >-->
         <!--</div>-->
         <div class="col-12 col-sm-12 col-lg-6 new_photo_ure">
            <img src="https://pccleaning.in/global_truck_academy/public/frontend/photo/Truck.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy">
         </div>
         <div class="col-lg-6 new_padding ">
            <h1 class="fw-bold mb-lg-4 mb-md-4 mb-2">Why choose Global Truck Academy?</h1>
            <p class="lead">
               We provide students with quality instruction in a comfortable environment, so they are confident in their abilities on the road and in advancing their careers. With over 20 years of commercial driver training experience we have a superior reputation for providing employment ready commercial drivers.
         </div>
      </div>
   </div>
</section>
<section class=" py-lg-5 py-md-5 py-sm-5 py-3 ">
   <div class="container ">
      <div class="row">
         <div class="col-lg-9 col-md-9 col-sm-10 col-12 m-auto start_your_engine text-center px-4 py-5">
            <h4 class=" wow fadeInRight" data-wow-delay="1s">Take your Lessons with us!</h4>
            <p class=" wow fadeInRight" data-wow-delay="1s" >Get training from professionals with over 25 years of industry experience</p>
            <div class="bgr new_btn wow fadeInRight" data-wow-delay="1s"  >
               <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-secondary">Book Now</a>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection