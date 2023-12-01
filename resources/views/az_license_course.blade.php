@extends('layouts.front_main')
@section('content')
<section class="">
   <div class="container">
      <div class="our_tream_heading new_line text-center">
         <h1 class="fw-bold">AZ License</h1>
      </div>
   </div>
</section>
<section class="py-4 contact_new">
   <div class="container">
      <div class="row mt-lg-2 mt-2 align-items-center">
         <div class="col-md-6 col-12 mb-4 ">
            <div class="new_file new_our_img new_photo_ure wow fadeInLeft" data-wow-delay="1s" >
               <img id="new_images" src="public/frontend/photo/AZ_License.jpg" alt="">
            </div>
         </div>
         <div class="col-md-6 col-12">
            <div class=" new_our_box col-lg-12 col-12 m-auto">
               <div class="our_tream_heading ">
                  <h3 class="fw-bold">Topics Included</h3>
               </div>
               <div class="mb-lg-3 mb-md-3 mb-4">
                  <div class="text-all wow zoomIn anm-3" data-wow-duration="1s" data-wow-delay=".5s" >
                     <!--<h2>Our Workforce</h2>-->
                     <ul class="list-icon ps-0">
                        <li class="ps-0"><i class="fa fa-check" aria-hidden="true"></i>Introduction to Commercial Driving&nbsp;</li>
                        <li class="ps-0"><i class="fa fa-check" aria-hidden="true"></i>Getting to know the Truck Controls&nbsp;</li>
                        <li class="ps-0"><i class="fa fa-check" aria-hidden="true"></i>Personal Safety and Safety Equipment&nbsp;</li>
                        <li class="ps-0"><i class="fa fa-check" aria-hidden="true"></i>Gears and Shifting&nbsp;</li>
                        <li class="ps-0"><i class="fa fa-check" aria-hidden="true"></i>Daily Vehicle Inspection&nbsp;</li>
                        <li class="ps-0"><i class="fa fa-check" aria-hidden="true"></i>Bob Tailing&nbsp;</li>
                        <li class="ps-0"><i class="fa fa-check" aria-hidden="true"></i>Hours of Service</li>
                        <li class="ps-0"><i class="fa fa-check" aria-hidden="true"></i>Coupling and Uncoupling&nbsp;</li>
                        <li class="ps-0"><i class="fa fa-check" aria-hidden="true"></i>Defensive Driving&nbsp;</li>
                        <li class="ps-0"><i class="fa fa-check" aria-hidden="true"></i>Collision Scene, Incidents and Reporting&nbsp;</li>
                        <li class="ps-0"><i class="fa fa-check" aria-hidden="true"></i>Maneuvering and Turning Techniques&nbsp;</li>
                        <li class="ps-0"><i class="fa fa-check" aria-hidden="true"></i>Weights and Dimensions&nbsp;</li>
                        <li class="ps-0"><i class="fa fa-check" aria-hidden="true"></i>Loads- Handling, Distribution and Secure&nbsp;</li>
                        <li class="ps-0"><i class="fa fa-check" aria-hidden="true"></i>In Vehicle Documentation and Records</li>
                        <li class="ps-0"><i class="fa fa-check" aria-hidden="true"></i>Pulling Loads&nbsp;</li>
                        <li class="ps-0"><i class="fa fa-check" aria-hidden="true"></i>Backing Up&nbsp;</li>
                        <li class="ps-0"><i class="fa fa-check" aria-hidden="true"></i>Introduction to Dangerous Goods</li>
                        <li class="ps-0"><i class="fa fa-check" aria-hidden="true"></i>Trip Planning and Border Control Issues&nbsp;</li>
                        <li class="ps-0" ><i class="fa fa-check" aria-hidden="true"></i>Highway Driving</li>
                        <li class="ps-0"><i class="fa fa-check" aria-hidden="true"></i>Formal Review and Final Evaluation&nbsp;</li>
                     </ul>
                  </div>
               </div>
               <div class="bgr"><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary"> Enroll Now	</a></div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="py-4">
   <div class="container">
      <div class="row mt-lg-2 mt-2 align-items-center">
         <div class="col-md-7 col-12">
            <div class=" new_our_box col-lg-12 col-12 m-auto">
               <h1 class="fw-bold mt-2 mb-3">Program Overview</h1>
               <div class="mb-lg-3 mb-md-3 mb-4">
                  <div class="text-all text-center wow zoomIn anm-3" data-wow-duration="1s" data-wow-delay=".5s" >
                     <!--<h2>Our Workforce</h2>-->
                     <p>The Ministry of Transportation is introducing Mandatory Entry Level Training ( MELT ) that requires students to successfully complete the mandatory program prior to attending their A class road test.</p>
                     <p><span class="fw-bold">CLASS A:</span> Truck Trailer several tractor trailer or combination of motor vehicle and towed vehicles where the towed vehicles exceed a total gross weight of 4,600 kilograms </p>
                     <p><span class="fw-bold">Note:  A student will complete this program within 4 -5 weeks or more, and it depends on the MTO road test dates.</span></p>
                  </div>
               </div>
               <h1 class="fw-bold mt-4">Eligibility Requirements</h1>
               <ul>
                  <li>At least 18 years old</li>
                  <li>Must have a valid Ontario G class Driver License&nbsp;</li>
                  <li>Must complete and submit a medical report to the Drive Test Center</li>
                  <li>Must Pass an eye test at the Drive Test Center&nbsp;</li>
                  <li>Must Pass a written test for A class and traffic signs</li>
                  <li>Must have proof of completing 10th grade or pass the Canadian Achievement Survey Test for Adults (CAST)&nbsp;
                  </li>
               </ul>
               <!--<div class="bgr"><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary"> Enroll Now	</a></div>   -->
            </div>
         </div>
         <div class="col-md-5 col-12">
            <div class="from ml-lg-3 wow fadeInRight" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInRight;">
               @if($message=Session::get('success'))
               <div class="alert bg-green alert-dismissible new_alert_uy" role="alert" id="alert">
                  <button type="button" class="close" data-dismiss="alert"   >
                  <span aria-hidden="true">×</span>
                  </button>
                  {{ $message }}
               </div>
               @endif
               <div class="heading text-center mt-2 mr-lg-5 mb-4">
                  <h1 class="fw-bold">Have a Question?</h1>
               </div>
               <form method="POST" action="{{route('add-contact')}}">
                  @csrf
                  <div class="form-group">
                     <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Name*" required>
                     @error('name')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror                             
                  </div>
                  <div class="form-group">
                     <!--<label >Email</label>-->
                     <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Email*" required>
                     @error('email')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror                         
                  </div>
                  <div class="form-group">
                     <!--<label >Phone</label>-->
                     <input type="number" name="phone" class="form-control" value="{{old('phone')}}" placeholder="Phone*" required>
                     @error('phone')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror  
                  </div>
                  <div class="form-group ">
                     <!--<label >Question</label>-->
                     <textarea name="question" placeholder="Question*" class="form-control" value="{{old('question')}}" rows="4" cols="50" required> </textarea>
                     @error('question')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <button type="submit" class="btn btn-primary mt-3">Send a Question</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection