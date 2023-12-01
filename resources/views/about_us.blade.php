@extends('layouts.front_main')
@section('content')
@foreach($about as $key => $about)
<section class="new_sention_team">
   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            @if(!empty($about->banner_image))
            <!--<img src="https://pccleaning.in/global_truck_academy/public/frontend/photo/divi.jpg" class="d-block w-100" alt="...">-->
            <img id="new_images" src="{{URL::to('/')}}/public/images/about/{{$about->banner_image}}" alt="">
            @endif
            <div class="carousel-caption new_line">
               <h1>{{$about->title}}</h1>
               <!-- <p>Some representative placeholder content for the first slide.</p> -->
            </div>
         </div>
      </div>
   </div>
</section>
<section class="our_tream_page">
   <div class="container">
      <div class="our_tream_heading new_line text-center">
         <h1 class="fw-bold">About Global Truck Academy</h1>
      </div>
      <div class="row mt-lg-2 mt-2 ">
         <div class="col-md-6 col-12 mb-4 ">
            <div class="new_our_img new_photo_ure wow fadeInLeft" data-wow-delay="1s">
               @if(!empty($about->image))
               <img id="new_images" src="{{URL::to('/')}}/public/images/about/{{$about->image}}" alt="">
               @endif
            </div>
         </div>
         <div class="col-md-6 col-12">
            <div class="new_text_about new_our_box col-lg-12 col-12 m-auto">
               <div class="mb-lg-3 mb-md-3 mb-4">
                  <div class="text-all wow zoomIn anm-3" data-wow-duration="1s" data-wow-delay=".5s">
                     <!--<h2>Our Workforce</h2>-->
                     <p> {!!$about->description!!}</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endforeach
<section class="our_tream_page">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-4 colsm-4 col-12" >
            <div class="flip-box">
               <div class="flip-box-inner wow fadeInLeft" data-wow-delay="1s" >
                  <div class="flip-box-front">
                     <div class="col-12">
                        <div class="img_icon_box-front">
                           <img src="public/frontend/photo/icon/Vision.png">
                        </div>
                        <h2>Vision</h2>
                     </div>
                  </div>
                  <div class="flip-box-back">
                     <p>Global Truck Driving Academy strives to promote in each of our students the attitudes associated with a safe and successful life-long driving experience.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 colsm-4 col-12" >
            <div class="flip-box">
               <div class="flip-box-inner wow zoomIn" data-wow-delay="1s" >
                  <div class="flip-box-front">
                     <div class="col-12">
                        <div class="img_icon_box-front">
                           <img src="public/frontend/photo/icon/Mission-2.png">
                        </div>
                        <h2>Mission</h2>
                     </div>
                  </div>
                  <div class="flip-box-back">
                     <p>Our mission at Global Truck Driving Academy is to provide each student with a solid foundation of knowledge and skills to help them become a safe, responsible, and confident driver.</p>
                     <p>Global Truck Driving Academy moves to provide individual instruction (smaller class size) in order to meet the demands of today’s ever changing and challenging driving environment.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 colsm-4 col-12" >
            <div class="flip-box">
               <div class="flip-box-inner wow fadeInRight" data-wow-delay="1s" >
                  <div class="flip-box-front">
                     <div class="col-12">
                        <div class="img_icon_box-front">
                           <img src="public/frontend/photo/icon/Core-values.png">
                        </div>
                        <h2>Core Values</h2>
                     </div>
                  </div>
                  <div class="flip-box-back new_fip_bh" >
                     <ul>
                        <li><span>Lead Road Safety</span>: Enable road safety by</li>
                        <li><span>Quality Training</span>: Patience and respect serve as the model of our teaching.</li>
                        <li><span>Customer Centric</span></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="schedule py-lg-5 py-md-5 py-sm-5 py-3 ">
   <div class="container px-4 py-5">
      <div class="row">
         <div class="col-lg-3 col-md-3 colsm-6 col-12">
            <div class="new_box_img wow zoomIn" data-wow-delay="1s">
               <div class="up_img">
                  <img src="public/frontend/photo/icon/shape.png">
                  <div class="dorn_img">
                     <img src="public/frontend/photo/icon/education-2.png">
                  </div>
               </div>
               <div class="new_box_img_text">
                  <h4 data-toggle="counter-up"><span class="new_counter">100</span>%</h4>
                  <p>STUDENTS APPROVED</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-3 colsm-6 col-12">
            <div class="new_box_img wow zoomIn" data-wow-delay="1s">
               <div class="up_img">
                  <img src="public/frontend/photo/icon/shape.png">
                  <div class="dorn_img">
                     <img src="public/frontend/photo/icon/target-2.png">
                  </div>
               </div>
               <div class="new_box_img_text">
                  <h4 data-toggle="counter-up"><span class="new_counter">100 </span>%</h4>
                  <p>CUSTOMERS SATISFITION</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-3 colsm-6 col-12">
            <div class="new_box_img wow zoomIn" data-wow-delay="1s">
               <div class="up_img">
                  <img src="public/frontend/photo/icon/shape.png">
                  <div class="dorn_img">
                     <img src="public/frontend/photo/icon/clock-2.png">
                  </div>
               </div>
               <div class="new_box_img_text">
                  <h4 data-toggle="counter-up"><span class="new_counter">2890</span>+</h4>
                  <p>HOURS OF LESSONS</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-3 colsm-6 col-12">
            <div class="new_box_img wow zoomIn" data-wow-delay="1s">
               <div class="up_img">
                  <img src="public/frontend/photo/icon/shape.png">
                  <div class="dorn_img">
                     <img src="public/frontend/photo/icon/classroom.png">
                  </div>
               </div>
               <div class="new_box_img_text">
                  <h4 data-toggle="counter-up"><span class="new_counter">2640</span>+</h4>
                  <p>STUDENTS</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="new_engine py-lg-5 py-md-5 py-sm-5 py-3 ">
   <div class="container ">
      <div class="row">
         <div class="col-lg-9 col-md-9 col-sm-10 col-12 m-auto start_your_engine text-center px-4 py-5">
            <h4 class=" ">Start your Engine</h4>
            <p class=" " >Choosing Global Truck Academy will put you on the road to be a better driver.</p>
            <div class="bgr new_btn "  >
               <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-secondary">Enroll Now</a>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="new_images_sold py-lg-5 py-md-5 py-sm-5 py-3  ">
   <div class="container ">
      <div class="row">
         <div class="owl-carousel owl-theme new_one_add"  >
            @foreach($gallery as $key => $gallery)
            <div class="item">
               <div class="new_img_yt">
                  <img src="{{URL::to('/')}}/public/images/about/{{$gallery->image}}">
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
</section>
@endsection