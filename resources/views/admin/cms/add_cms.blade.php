@extends('layouts.admin')
@section('content')
<div class="right_col" role="main" style="min-height: 918.8px;">
   <section class="content-header">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>{{__('Add New Page')}}</h1>
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
                  <form action="{{route('store-cms')}}"  method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype='multipart/form-data'>
                     @csrf
                     <div class="col-sm-12">
                        <div class="from_add">
                           <label>{{__('Page Name')}}:</label>
                           <input type="text" class="form-control" name="page_name" required><br>
                           <label>{{__('Title')}}:</label>
                           <input type="text" class="form-control" name="title" required><br>
                           <label>{{__('Show in footer')}}:</label><br>
                           <label for="yes">
                           <input type="radio" id="yes" name="show_in_footer" value="yes">
                           Yes
                           </label>
                           <label for="no">
                           <input type="radio" id="no" name="show_in_footer" value="no">
                           No
                           </label>
                           <br>
                           <label>{{__('Description')}}:</label><br>
                           <textarea name="description" id="myeditor" class="form-control" placeholder="{{__('Description')}}"></textarea>
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