@extends('layouts.front_main')
@section('content')
<section class="new_sention_team">
   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active wow fadeInLeft" data-wow-delay="1s">
            <img src="https://pccleaning.in/global_truck_academy/public/images/settings/Slider-2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption new_line">
               <h1>Contact Us</h1>
               <!-- <p>Some representative placeholder content for the first slide.</p> -->
            </div>
         </div>
      </div>
   </div>
</section>
<div id="scroll" class="new_pedding">
   <section class="our_tream_page contact_new">
      <div class="container">
         <div class="row ">
            <div class="col-lg-6 col-md-6 col-12 new_map_con mt-3 mb-3 " >
               <div class="new_image_contact mr-lg-3">
                  <div class="new_contant_us _text wow fadeInLeft" data-wow-delay="1s">
                     <div class="heading text-left mb-lg-5 mb-3">
                        <h1 class="fw-bold">Our Office</h1>
                     </div>
                     <div class="adress  mb-lg-5 mb-md-5 mb-sm-5 mb-3">
                        <div class="row">
                           <div class=" col-1 icon_yt">
                              <i class="fa fa-map-marker" aria-hidden="true"></i>
                           </div>
                           <div class=" col-11">
                              <h5>ADDRESS</h5>
                              <p>{{get_setting('address')}}</p>
                           </div>
                        </div>
                     </div>
                     <div class="adress  mb-lg-5 mb-md-5 mb-sm-5 mb-5">
                        <div class="row">
                           <div class="col-1 icon_yt">
                              <i class="fa fa-phone" aria-hidden="true"></i>
                           </div>
                           <div class=" col-11 ">
                              <h5>PHONE 24/7</h5>
                              <a class="mb-lg-3" href="tel:289-505-1000">{{get_setting('phone')}}</a>
                           </div>
                        </div>
                     </div>
                     <div class="adress  mb-lg-5 mb-md-5 mb-sm-5 mb-3">
                        <div class="row">
                           <div class="col-1 icon_yt">
                              <i class="fa fa-clock-o" aria-hidden="true"></i>
                           </div>
                           <div class="col-11 ">
                              <h5>OPERATING HOURS</h5>
                              <p class=" mb-0">Office: {{get_setting('operating_hours')}}</p>
                              <p class="mb-0">Yard Training: Mon-Sun: 9:00 am – 9:00 pm</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-3 mb-3">
               <div class="from ml-lg-3 wow fadeInRight" data-wow-delay="1s">
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
                        <!--<label ></label>-->
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Name*" required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                     <div class="form-group">
                        <!--<label >Email</label>-->
                        <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email*" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                     <div class="form-group">
                        <!--<label >Phone</label>-->
                        <input type="number" name="phone" value="{{old('phone')}}" class="form-control"  placeholder="Phone*" required>
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                     <div class="form-group ">
                        <!--<label >Question</label>-->
                        <textarea  name="question" placeholder="Ask Your Question*" value="{{old('question')}}" class="form-control" rows="4" cols="50" required> </textarea>
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
         <div class="col-lg-12 col-md-12 col-12 new_map_con mt-3 mb-3 wow zoomIn" data-wow-delay="1s">
            <div class="map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2881.4664186616674!2d-79.65890979999999!3d43.76317600000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b3f5fbbf11747%3A0xfaa2dc61d8154007!2sGlobal%20Truck%20Academy%20Ltd.!5e0!3m2!1sen!2sin!4v1684146843439!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection