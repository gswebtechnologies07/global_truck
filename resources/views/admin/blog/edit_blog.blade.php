@extends('layouts.admin')
@section('content')
<div class="right_col" role="main" style="min-height: 918.8px;">
   <section class="content-header">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>{{__('Edit BLogs')}}</h1>
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
                  <form method="post" action="{{route('update-programs')}}" enctype="multipart/form-data" class="form-horizontal">
                     @csrf
                     @if(!empty($blog->id))
                     <input type="hidden" name="_method" value="POST" />
                     <input type="hidden" name="id" value="{{old('id',$blog->id)}}">
                     @else
                     <input type="hidden" name="id" value="">
                     @endif
                     <div class="col-sm-12">
                        <div class="from_add">
                           <label>{{__('Image')}}:</label>
                           <div class="col-lg-12 col-md-12 col-12">
                              <div class="new_photo_profile">
                                 <img id="output" src="{{URL::to('/')}}/public/images/blogs/{{$blog->image}}" height="100" width="100">
                                 <input type="hidden" name="old_image" value="{{$blog->image}}" class="form-control">
                                 <input type="file" name="new_image" id="image" accept="image/*" class="form-control with-icon" onchange="loadFile(event)">
                                 <script>
                                    var loadFile = function(event) {
                                        var image = document.getElementById('output');
                                        image.src = URL.createObjectURL(event.target.files[0]);
                                        $('#output').slideDown();
                                        $('#output').height(100);
                                        $('#output').width(100);
                                    };
                                 </script>
                              </div>
                           </div>
                           <br>
                           <label>{{__('Category')}}:</label>
                           <select  class="form-control" name="name" id='user_id'>
                              <option selected>Select</option>
                              @foreach ($categories as $category)
                              <option value="{{$category->category}} {{$category->category  ? 'selected' : ''}}">{{$category->category}}</option>
                              @endforeach
                           </select>
                           <label>{{__('Title')}}:</label>
                           <input type="text" class="form-control" name="title" value="@if(!empty($blog->title)) {{$blog->title}} @else {{old('title')}} @endif" required><br>
                           <label>{{__('Content')}}:</label><br>
                           <textarea name="content" id="myeditor" class="form-control" placeholder="{{__('Content')}}">@if(!empty($blog->content)) {{$blog->content}} @else {{old('content')}} @endif</textarea>
                           <label>{{__('Tags')}}:</label><br>
                           <textarea name="tags" class="form-control" placeholder="{{__('Tags')}}" required>@if(!empty($blog->tags)) {{$blog->tags}} @else {{old('tags')}} @endif</textarea>
                           <label>{{__('Added By')}}:</label>
                           <input type="text" class="form-control" name="added_by" value="@if(!empty($blog->added_by)) {{$blog->added_by}} @else {{old('added_by')}} @endif" required><br>
                           <?php
                              $radio_1 = 'checked="checked"';
                              $radio_2 = '';
                              if (old('show_in_footer', ((isset($blog)) ? $blog->is_active : yes)) == 'no') {
                                  $radio_1 = '';
                                  $radio_2 = 'checked="checked"';
                              }
                              ?>
                           <label>{{__('Is Active')}}:</label><br>
                           <label for="yes">
                           <input type="radio" id="yes" name="is_active" value="yes" {{$radio_1}}>
                           Yes
                           </label>
                           <label for="no">
                           <input type="radio" id="no" name="is_active" value="no" {{$radio_2}}>
                           No
                           </label>
                           <br>
                           <?php
                              $feature_1 = 'checked="checked"';
                              $feature_2 = '';
                              if (old('show_in_footer', ((isset($blog)) ? $blog->is_featured : yes)) == 'no') {
                                  $feature_1 = '';
                                  $feature_2 = 'checked="checked"';
                              }
                              ?>
                           <label>{{__('Is Featured')}}:</label><br>
                           <label for="yes">
                           <input type="radio" id="yes" name="is_featured" value="yes" {{$feature_1}}>
                           Yes
                           </label>
                           <label for="no">
                           <input type="radio" id="no" name="is_featured" value="no" {{$feature_2}}>
                           No
                           </label>
                           <br>
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