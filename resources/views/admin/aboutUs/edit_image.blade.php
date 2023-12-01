@extends('layouts.admin')
@section('content')
<div class="right_col" role="main" style="min-height: 918.8px;">
   <section class="content-header">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>{{__('About Us Images')}}</h1>
            </div>
         </div>
      </div>
   </section>
   <!-- Content Header (Page header) -->
   <section class="content">
      <div class="container-fluid">
         <div class="row mb-2">
            @if($error=Session::get('error'))
            <div class="alert bg-red alert-dismissible" role="alert" id="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">×</span>
               </button>
               {{ $error }}
            </div>
            @endif
            @if($message=Session::get('success'))
            <div class="alert bg-green alert-dismissible" role="alert" id="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">×</span>
               </button>
               {{ $message }}
            </div>
            @endif<br>
            <div class="col-sm-12">
               @if(count($errors)>0)
               <div class='alert alert-danger'>
                  <ul>
                     @foreach($errors->all() as $error)
                     <li>{{$error}}</li>
                     @endforeach
                  </ul>
               </div>
               @endif<br>
               <div class="bg-ytr col-8 m-auto">
                  <form method="POST" action="{{route('image-update')}}" enctype="multipart/form-data" class="form-horizontal" multiple>
                     @csrf
                     @if(!empty($about->id))
                     <input type="hidden" name="_method" value="post" />
                     @else
                     <input type="hidden" name="id" value="">
                     @endif
                     <div class="col-sm-12">
                        <div class="from_add">
                           <div class="col-lg-12 col-md-12 col-12">
                              <div class="new_photo_profile">
                                 @if($multiple_image->type == 'mp4' || $multiple_image->type == 'AVCHD' || $multiple_image->type == 'MOV')
                                 <video style="width:200px;">
                                    <source  id="output" src="{{URL::to('/')}}/public/images/multiple/{{$multiple_image->video}}" >
                                 </video>
                                 @else
                                 <img id="output" src="{{URL::to('/')}}/public/images/multiple/{{$multiple_image->video}}" multiple>
                                 @endif
                                 <input type="hidden" name="old_video" value="{{$multiple_image->video}}" class="form-control" multiple>
                                 <input type="file" name="new_video" id="video"  class="form-control with-icon" onchange="loadFile(event)" multiple>
                                 <script>
                                    var loadFile = function(event) {
                                        var image = document.getElementById('output');
                                        image.src = URL.createObjectURL(event.target.files[0]);
                                        $('#output').slideDown();
                                        $('#output').height(50);
                                        $('#output').width(50);
                                    };
                                 </script>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="sumiy">
                        <button type="submit" class="btn btn-danger">{{__('Save')}}</button>
                     </div>
               </div>
               </form> 
            </div>
         </div>
      </div>
   </section>
</div>
@endsection