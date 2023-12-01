@extends('layouts.admin')
@section('content')
<div class="right_col" role="main" style="min-height: 918.8px;">
   <section class="content-header">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>{{__('Update Cms')}}</h1>
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
                  <form method="post" action="{{route('update-cms')}}" enctype="multipart/form-data" class="form-horizontal">
                     @csrf
                     @if(!empty($cms->id))
                     <input type="hidden" name="_method" value="patch" />
                     <input type="hidden" name="id" value="{{old('id',$cms->id)}}">
                     @else
                     <input type="hidden" name="id" value="">
                     @endif
                     <div class="col-sm-12">
                        <div class="from_add">
                           <label>{{__('Page Name')}}:</label>
                           <input type="text" class="block mt-1 w-full" name="page_name" value="@if(!empty($cms->page_name)) {{$cms->page_name}} @else {{old('page_name')}} @endif" required><br>
                           <label>{{__('Title')}}:</label>
                           <input type="text" class="block mt-1 w-full" name="title" value="@if(!empty($cms->title)) {{$cms->title}} @else {{old('title')}} @endif" required><br>
                           <?php
                              $radio_1 = 'checked="checked"';
                              $radio_2 = '';
                              if (old('show_in_footer', ((isset($cms)) ? $cms->show_in_footer : yes)) == 'no') {
                                  $radio_1 = '';
                                  $radio_2 = 'checked="checked"';
                              }
                              ?>
                           <label>{{__('Show in footer')}}:</label><br>
                           <label for="yes">
                           <input type="radio" id="show_in_footer" name="show_in_footer" value="yes" {{$radio_1}}/>
                           Yes
                           </label>
                           <label for="no">
                           <input type="radio" id="show_in_footer" name="show_in_footer" value="no" {{$radio_2}}/>
                           No
                           </label>
                           <br>
                           <label>{{__('Description')}}:</label>
                           <textarea name="description" id="myeditor" class="form-control" placeholder="{{__('Description')}}">@if(!empty($cms->description)) {{$cms->description}} @else {{old('description')}} @endif</textarea>
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