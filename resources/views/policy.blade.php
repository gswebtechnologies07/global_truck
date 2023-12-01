@extends('layouts.front_main')
@section('content')
<section class="">
   <div class="container">
      <div class="our_tream_heading new_line text-center">
         <h1 class="fw-bold">Policies</h1>
      </div>
   </div>
</section>
<section class="">
   <div class="container">
      <div class="row">
         <div class="col-md-9 col-sm-9 col-12 blog-post with-sidebar-blog">
            <div class="first_blog all_blog">
               <div class="video-services">
                  <iframe width="100%" height="450px" src="https://player.vimeo.com/video/63692561"></iframe>
               </div>
               <div class="post-meta d-flex">
                  <div class="date"> <a href="#" >November 20, 2019</a></div>
                  <div class="reviews ml-lg-4"><i class="fa fa-quote-left" aria-hidden="true"></i> <span> 0</span>
                  </div>
               </div>
               <h2 class="fw-bold"><a href="#" >Benefits Of The Online Maryland Driver Improvement Program</a></h2>
               <div class="new_ame">by <span class="author vcard"><a class="url" href="#">Aman Kaur</a></span></div>
               <p>There are a number of different reasons why you might consider attending an online driving school. In many cases, it is because doing so is ordered by the local courts. The judge might order you to take such a program because of a traffic conviction while you are on a…</p>
               <div class="bgr"><a href="#" class="btn btn-primary" > Read More	</a></div>
            </div>
            <div class="first_blog all_blog">
               <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img src="{{URL::to('/')}}/public/frontend/photo/Slider.jpg" class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                        <img src="{{URL::to('/')}}/public/frontend/photo/Slider-2.jpg" class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                        <img src="{{URL::to('/')}}/public/frontend/photo/Slider-3.jpg" class="d-block w-100" alt="...">
                     </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                  </button>
               </div>
               <div class="post-meta d-flex">
                  <div class="date"> <a href="#" >November 20, 2019</a></div>
                  <div class="reviews ml-lg-4"><i class="fa fa-quote-left" aria-hidden="true"></i> <span> 0</span>
                  </div>
               </div>
               <h2 class="fw-bold"><a href="#" >Vehicle Theft Protection Guidelines</a></h2>
               <div class="new_ame">by <span class="author vcard"><a class="url" href="#">Aman Kaur</a></span></div>
               <p>There are a number of different reasons why you might consider attending an online driving school. In many cases, it is because doing so is ordered by the local courts. The judge might order you to take such a program because of a traffic conviction while you are on a…</p>
               <div class="bgr"><a href="#" class="btn btn-primary" > Read More	</a></div>
            </div>
         </div>
         <div class="col-md-3 col-md-3 col-12 aside">
            <div class="" id="categories-3">
               <h3 class="tt-title">Post Categories</h3>
               <ul class="list-icon ps-0">
                  <li class="cat-item cat-item-61  ps-0"><a href="#">Audios</a> (4)
                  </li>
                  <li class="cat-item cat-item-62  ps-0"><a href="#">Daily Inspiration</a> (4)
                  </li>
                  <li class="cat-item cat-item-63  ps-0"><a href="#">Freelance</a> (3)
                  </li>
                  <li class="cat-item cat-item-64 current-cat  ps-0"><a aria-current="page" href="#">Links</a> (5)
                  </li>
                  <li class="cat-item cat-item-65  ps-0"><a href="#">Mobile</a> (2)
                  </li>
                  <li class="cat-item cat-item-67  ps-0"><a href="#">Quotes</a> (2)
                  </li>
                  <li class="cat-item cat-item-68  ps-0"><a href="#">Resources</a> (4)
                  </li>
                  <li class="cat-item cat-item-69  ps-0"><a href="#">Status</a> (2)
                  </li>
                  <li class="cat-item cat-item-1  ps-0"><a href="#">Uncategorized</a> (10)
                  </li>
               </ul>
            </div>
            <div class="tag my-3">
               <h3 class="tt-title my-3">Tag</h3>
               <a href="#" class="btn btn-primary" > certified	</a>
               <a href="#" class="btn btn-primary" > classes	</a>
               <a href="#" class="btn btn-primary" > coaches	</a>
               <a href="#" class="btn btn-primary" > driver training	</a>
               <a href="#" class="btn btn-primary" > driving school	</a>
               <a href="#" class="btn btn-primary" > teaching	</a>
            </div>
            <div class="featured_posts">
               <h3 class="tt-title my-3">Featured Posts</h3>
               <div class="imd mb-2">
                  <img src="{{URL::to('/')}}/public/frontend/photo/Slider.jpg">
                  <div class="reviews ml-lg-4 mb-2"><i class="fa fa-quote-left" aria-hidden="true"></i> <span> 0</span></div>
                  <h5 class="fw-bold mb-2">Tips for Safe Driving With Pets In The Car</h5>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>    
</section>
@endsection