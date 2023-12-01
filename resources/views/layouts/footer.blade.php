<footer>
   <div class="new-footer navbar-dark bg-primary py-2 ">
   <div class="container">
      <div class="row new_name_footer my-4">
         <div class="col-lg-12">
            <div class="new_logo ">
               <img src="{{URL::to('/')}}/public/frontend/photo/site-logo.jpg">
            </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-6 col-12">
            <div class="user_link">
               <h4>Useful Links</h4>
               <ul>
                  <li><a class="nav-link  wow fadeInLeft " data-wow-delay="0.5s"  href="{{route('/')}}"><span>Home</a></span> </li>
                  <li><a class="nav-link wow fadeInLeft " data-wow-delay="0.5s"  href="{{route('about')}}"><span>About Us</span></a> </li>
                  <li><a class="nav-link wow fadeInLeft " data-wow-delay="0.5s"  href="{{route('air-brake')}}"><span>Air Brake Endorsement</span></a> </li>
                  <li><a class="nav-link wow fadeInLeft " data-wow-delay="0.5s"  href="{{route('az-license-course')}}"><span>AZ License Course</span></a> </li>
                  <li><a class="nav-link wow fadeInLeft " data-wow-delay="0.5s"  href="{{route('dz-license-course')}}"><span>DZ License Course</span></a> </li>
                  <li><a class="nav-link wow fadeInLeft " data-wow-delay="0.5s"  href="{{route('contact')}}"><span>Contact Us</span></a> </li>
               </ul>
            </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-6 col-12">
            <div class="user_link polices  " >
               <h4>Polices</h4>
               <ul class="wow fadeInLeft " data-wow-delay="0.5s">
                  @php
                  $links = get_cms();
                  @endphp
                  @foreach($links as $key => $link)
                  <li><a class="nav-link  wow fadeInLeft " data-wow-delay="0.5s"  href="{{route('cms',$link->slug)}}"><span>{{$link->page_name}}</span></a> </li>
                  @endforeach
               </ul>
            </div>
         </div>
         <div class="col-lg-3 col-lg-3 col-md-3 col-sm-6 col-12">
            <h4>Contact</h4>
            <div class="contact_d wow fadeInRight" data-wow-delay="0.5s ">
               <a  href="tel:289-505-1000" >{{get_setting('phone')}}</a><br>
               <a  href = "mailto:admin@globaltruckacademy.com">{{get_setting('email')}}</a><br>
               <p>{{get_setting('address')}}</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-6 col-12 wow fadeInRight" data-wow-delay="0.5s">
            <h4 class="new_logo_test text-lg-center text-md-center text-left ">We are Approved by TTSAO</h4>
            <div class=" ne_one_logo text-center">
               <img src="{{URL::to('/')}}/public/frontend/photo/logo-2018-with-Tagline.jpg">
            </div>
         </div>
      </div>
      <div class="col-lg-12">
         <div class="new_foter_icon text-center">
            <ul class="footer_ul">
               <li>
                  <a href="{{get_setting('facebook')}}" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
               </li>
               <li>
                  <a href="{{get_setting('instagram')}}" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
               </li>
               <li>
                  <a href="{{get_setting('twitter')}}" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <div class="copy_uy pb-2 new_cpy_text">
      <div class="container">
         <div class="row text-center">
            <p class="copy_level">Copyright © {{get_setting('year_of_development')}} Global Truck Academy - All Rights Reserved.</p>
            <p class="copy_gs">Designed &amp; Developed by <a href="https://gswebtech.com/" target="blank">GS Web Technologies</a></p>
         </div>
      </div>
   </div>
</footer>
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Enroll Now</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="from ml-lg-3 " >
               <form method="POST" id="enroll_add">
                  @csrf
                  <div class="form-group">
                     <input type="text" name="name" id="name" required class="form-control" placeholder="Name*">
                  </div>
                  <div class="form-group">
                     <input type="email" name="email" id="email" required class="form-control" placeholder="Email*">
                  </div>
                  <div class="form-group">
                     <input type="number" name="phone" id="phone" class="form-control" placeholder="Phone*">
                  </div>
                  <div class="form-group mt-2 mb-2">
                     <select class="form-control" name="programs" id="programs">
                        <option value="">Select Program</option>
                        <option value="air_brake">AirBrakes</option>
                        <option value="az_license">AZ License</option>
                        <option value="dz_license">DZ License</option>
                     </select>
                  </div>
                  <textarea name="question" placeholder="Question*" id="question" class="form-control" rows="4" cols="50" spellcheck="false"> </textarea>
                  <div  class="alert alert-danger d-none mt-3 error_msg">All fields are required!</div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary add_enroll">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="zoom-in-zoom-out"> <a href="https://api.whatsapp.com/send?phone=16476186875&text&type=phone_number&app_absent=0" target="_blank"> <span class=""> <img src="{{URL::to('/')}}/public/frontend/photo/whatsapp.png" alt="whatsapp"> </span> </a> </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
   new WOW().init();
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
<script>
   $('.add_enroll').on('click', function() {
      
               var name     = $('#exampleModal #name').val(),
                   email    = $('#exampleModal #email').val(),
                   phone    = $('#exampleModal #phone').val(),
                   programs = $('#exampleModal #programs').val();
                   question = $('#exampleModal #question').val();
                   
               $.ajax({
                   type: "POST",
                   
                   dataType: "json",
                   url: "{{ route('enroll') }}",
                   data: {
                       name    : name,
                       email : email,
                       phone    : phone,
                       programs    : programs,
                       question  : question,
                      
                       _token: '{{ csrf_token() }}'
                   },
                   success: function(response) {
                       console.log(response);
                       if (response == 1){
                           // alert("Enroll Send Successfully");
                           swal("Thank You For Getting In Touch!", "We appreciate you for contacting us. One of our colleague(s) will get back to you shortly. <br> <strong>Have a great day!</strong>", "success"); 
                           setTimeout(function(){// wait for 5 secs(2)
                                  location.reload(); // then reload the page.(3)
                             }, 5000); 
                       }
                   },  
                   error: function (err) {
                       console.log(err);
                       $(".error_msg").removeClass('d-none');
                   }
               });
           });
</script>
<script>
   $(document).ready(function(){
     $(".alert .close span").click(function(){
       $(".alert").hide();
     });
   });
</script>
<script>
   window.addEventListener(
    "scroll",
    () => {
   document.body.style.setProperty(
     "--scroll",
     window.pageYOffset / (document.body.offsetHeight - window.innerHeight)
   );
    },
    false
   );
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript">
   $('.owl-carousel').owlCarousel({
     loop:true,
     autoplay:true,
     autoplayTimeout:3000,
     margin:10,
     nav:true,
     dots:false,
     responsive:{
         0:{
             items:1
         },
         600:{
             items:3
         },
         1000:{
             items:3
         }
     }
   })
</script>
<script>
   window.onscroll = function() {myFunction()};
   
   var header = document.getElementById("myHeader");
   var sticky = header.offsetTop;
   
   function myFunction() {
   if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
        $(".logo").addClass("d-none");
       $(".new_btn").removeClass("d-none");
   } else {
   header.classList.remove("sticky");
   $(".logo").removeClass("d-none");
   $(".new_btn").addClass("d-none");
   
   }
   }
</script>
<script>
   $( document ).ready(function() {
       $('.new_counter').counterUp({
           delay: 10,
           time: 2000
       });
       $('.new_counter').addClass('animated fadeInDownBig');
       $('.new_box_img_text p').addClass('animated fadeIn');
   });
</script>
<script src="https://pccleaning.in/global_truck_academy/public/frontend/js/counterup.min.js"></script>
<script src="https://pccleaning.in/global_truck_academy/public/frontend/js/waypoints.min.js"></script>
</body>
</html>