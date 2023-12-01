@extends('layouts.front_main')
@section('content')
<section class="slider_new_steel">
   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
         @foreach($banner as $key => $banners)
         <div class="carousel-item @if($key == '1') active @endif">
            <img src="{{URL::to('/')}}/public/images/settings/{{$banners->image}}" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
               <p class="wow fadeInbottom " data-wow-delay="1s">{{$banners->sub_title}}</p>
               <h2 class="wow bounceInRight " data-wow-delay="0.5s">{{$banners->title}}</h2>
            </div>
         </div>
         @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
      </button>
   </div>
</section>
<section class="counter  new_more_slider py-lg-5 py-md-5 py-sm-5 py-3">
   <div class="container reveal ">
      <div class="row">
         <div class=" owl-carousel owl-theme">
            <div class="item wow zoomIn anm-3" data-wow-duration="1s" data-wow-delay=".5s">
               <div class="box_icon">
                  <div class="new_img">
                     <img src="{{URL::to('/')}}/public/frontend/photo/icon/briefcase.png">
                  </div>
                  <h5>5+ Working Years</h5>
               </div>
            </div>
            <div class="item wow zoomIn anm-3" data-wow-duration="1s" data-wow-delay=".5s" >
               <div class="box_icon">
                  <div class="new_img">
                     <img src="{{URL::to('/')}}/public/frontend/photo/icon/sim-card.png">
                  </div>
                  <h5>1000+ Licenses Issued</h5>
               </div>
            </div>
            <div class="item wow zoomIn anm-3" data-wow-duration="1s" data-wow-delay=".5s" >
               <div class="box_icon">
                  <div class="new_img">
                     <img src="{{URL::to('/')}}/public/frontend/photo/icon/hand.png">
                  </div>
                  <h5>0% Financing</h5>
               </div>
            </div>
            <div class="item wow zoomIn anm-3" data-wow-duration="1s" data-wow-delay=".5s" >
               <div class="box_icon">
                  <div class="new_img">
                     <img src="{{URL::to('/')}}/public/frontend/photo/icon/rating.png">
                  </div>
                  <h5>Experienced Instructors</h5>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="new_about_section py-lg-5 py-md-5 py-sm-5 py-3 wow fadeIn " data-wow-delay="0.1s" >
   <div class="container ">
      <div class="about_us_tittle new_line text-center w3-animate-top wow fadeInDown anm-2" data-wow-duration="1s" data-wow-delay=".5s">
         <h1 class="fw-bold">Training Strategies of Global Truck Academy</h1>
      </div>
      <div class="row  py-lg-5  py-md-5 pt-4 pb-2">
         <div class="col-12 col-sm-12 col-lg-6 new_photo_ure">
            <img src="{{URL::to('/')}}/public/frontend/photo/Truck.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"  loading="lazy">
         </div>
         <div class="col-lg-6 new_padding ">
            <ul >
               <li class=" wow zoomIn anm-3" data-wow-duration="1s" data-wow-delay=".5s">
                  <h5>Targeted Knowledge </h5>
                  <p class="lead">
                     We do not complicate our students lives by attempting to teach knowledge they do not need to pass their tests. Any knowledge that can be imparted through on-the-job training is made secondary in favor of concentrating on the knowledge students need to have now. We call this information ‘targeted knowledge’.
                  </p>
               </li>
               <li class=" wow zoomIn anm-3" data-wow-duration="1s" data-wow-delay=".5s">
                  <h5>Fast-Paced and Concentrated  </h5>
                  <p class="lead">
                     It has been our experience that long, drawn-out classes make it difficult for students to retain information. Therefore, we utilize a fast-paced and concentrated training approach that gives our students the information they need in short, concentrated bursts. This results in greater retention and better recall for most students.
                  </p>
               </li>
               <li class="wow zoomIn anm-3" data-wow-duration="1s" data-wow-delay=".5s" >
                  <h5>Ongoing Support </h5>
                  <p class="lead">
                     All of our instructors are experienced professionals who have spent time on the road themselves. Our instructors are constantly on hand to answer questions, provide additional explanations or offer any extra help a student might need to complete a given module. They are aided by support staff wholly dedicated to the success of each student.
               </li>
            </ul>
         </div>
      </div>
      <div class="col-12 text-center  mb-lg-4">
         <div class="bgr"><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary"> Enroll Now	</a></div>
      </div>
   </div>
</section>
<section class="our_what_we_do new_services py-lg-5 py-md-5 py-sm-5 py-3 facts ">
   <div class="container reveal">
      <div class="our_what_new new_line text-center wow fadeInUp" data-wow-delay="0.1s">
         <h1 class="fw-bold">Our Programs</h1>
      </div>
      <div class="row mt-lg-5 mt-2 wow fadeInUp" data-wow-delay="0.1s">
         <div class="col-md-4 col-sm-6 col-12">
            <div class="box_new">
               <div class="new_what_whe_do w3-animate-left">
                  <div class="shape-two"></div>
                  <img src="{{URL::to('/')}}/public/frontend/photo/services/new_tr.jpg" class="image d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy">
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
               <!-- <div class="new_what_whe_do"> -->
               <div class="new_what_whe_do w3-animate-left">
                  <div class="shape-two"></div>
                  <img src="{{URL::to('/')}}/public/frontend/photo/services/hgt.jpg" class="image d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy">
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
                  <img src="{{URL::to('/')}}/public/frontend/photo/services/new_yr.jpg" class="image d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy">
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
<section class="our_what_we_do new_choose py-lg-5  py-md-5 py-sm-5 py-3 ">
   <div class="container mt-lg-2">
      <div class="our_what_new new_line text-center">
         <h1 class="fw-bold mb-lg-4 mb-md-4 mb-sm-4 mb-3">Why Choose Us?</h1>
         <p>We understand that learning to drive isn’t cheap, many driving schools will take advantage of this and charge you
            a larger sum than necessary; not us.
         </p>
      </div>
      <div class="row mt-lg-5 mt-2 ">
         <div class="new_icon ">
            <div class="row">
               <div class="col-md-4 col-sm-6 col-12 ">
                  <div class="single-department ">
                     <div class="shape-one"></div>
                     <div class="img_new wow fadeInLeft " data-wow-delay="1s">
                        <img src="{{URL::to('/')}}/public/frontend/photo/icon/protection.png">
                     </div>
                     <h5 class="wow fadeInLeft " data-wow-delay="0.7s">BEST SAFETY MEASURES</h5>
                     <p class="wow fadeInLeft " data-wow-delay="0.7s" >Our Instructors are Highly Trained in the latest Safety Techniques & Rules of the Road.</p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-12 ">
                  <div class="single-department ">
                     <div class="shape-one"></div>
                     <div class="img_new wow fadeInLeft" data-wow-delay="1s">
                        <img src="{{URL::to('/')}}/public/frontend/photo/icon/experience.png">
                     </div>
                     <h5 class="wow fadeInLeft " data-wow-delay="0.7s" >EXPERIENCED INSTRUCTORS</h5>
                     <p class="wow fadeInLeft" data-wow-delay="0.7s" >All our Instructors are DMV Licensed, mentally and physically fit and have decade or more of Instruction History.</p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-12 ">
                  <div class="single-department ">
                     <div class="shape-one"></div>
                     <div class="img_new wow fadeInLeft " data-wow-delay="1s">
                        <img src="{{URL::to('/')}}/public/frontend/photo/icon/clock.png">
                     </div>
                     <h5 class="wow fadeInLeft" data-wow-delay="0.7s">PERFECT TIMING</h5>
                     <p class="wow fadeInLeft " data-wow-delay="0.7s" >Now is the perfect time to start your In Class, Online or Behind The Wheel Training.</p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-12">
                  <div class="single-department ">
                     <div class="shape-one"></div>
                     <div class="img_new wow fadeInLeft " data-wow-delay="1s">
                        <img src="{{URL::to('/')}}/public/frontend/photo/icon/receipt.png">
                     </div>
                     <h5 class="wow fadeInLeft " data-wow-delay="0.7s">AFFORDABLE FEE</h5>
                     <p class="wow fadeInLeft " data-wow-delay="0.7s" >We know this process can be expensive. So we constantly monitor our competitions pricing.</p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-12">
                  <div class="single-department ">
                     <div class="shape-one"></div>
                     <div class="img_new  wow fadeInLeft " data-wow-delay="1s">
                        <img src="{{URL::to('/')}}/public/frontend/photo/icon/hands.png">
                     </div>
                     <h5 class="wow fadeInLeft " data-wow-delay="0.7s" >CLASS FORMATS</h5>
                     <p class="wow fadeInLeft " data-wow-delay="0.7s" >We offer In Classroom Drivers Education as well as Online Drivers Education.</p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-12">
                  <div class="single-department ">
                     <div class="shape-one"></div>
                     <div class="img_new wow fadeInLeft " data-wow-delay="1s">
                        <img src="{{URL::to('/')}}/public/frontend/photo/icon/payment-method.png">
                     </div>
                     <h5 class="wow fadeInLeft " data-wow-delay="0.7s">PAYMENT PLANS</h5>
                     <p class="wow fadeInLeft " data-wow-delay="0.7s">We allow you to decide when and how you want to pay. We accept all major forms of payments.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="shedo_2 py-lg-5 py-md-5 py-sm-5 py-3 "></section>
<section class="  new_gool_slider pt-lg-5 pt-md-5 pt-sm-5 pt-3 pb-2">
   <div class="container">
      <div class="row">
         <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
         <div class="elfsight-app-c6226ba1-b9ea-40c4-942b-795812b6d0f2"></div>
      </div>
   </div>
</section>
<section class="call_global_truck_academy py-lg-5 py-md-5 py-sm-5 py-3 ">
   <div class="container">
      <div class="truck_academy new_line text-center">
         <h1 class="fw-bold">Call Global Truck Academy</h1>
      </div>
      <div class="row align-items-center">
         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="new_full_trauk wow fadeInLeft " data-wow-delay="1s"> 
               <img src="{{URL::to('/')}}/public/frontend/photo/trauk.png"> 
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-12 text-center">
            <div class="new_call pull-right wow bounceInRight " data-wow-delay="1s">
               <h3>Schedule Your Driving Lessons with Us!
                  Manual and Automatic training available
               </h3>
               <a href="tel:2895051000" class="btn btn-primary" ><i class="fa fa-phone" aria-hidden="true"></i> 289-505-1000</a>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection