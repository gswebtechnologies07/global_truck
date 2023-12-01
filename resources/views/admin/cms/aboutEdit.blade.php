@extends('layouts.admin')
@section('content')
<div class="right_col" role="main" style="min-height: 918.8px;"><section class="content-header">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{__('About Us')}}</h1>
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
    				<form method="post" action="{{route('about-us')}}" enctype="multipart/form-data" class="form-horizontal">
    					@csrf
    					@if(!empty($contents->id))
    					<input type="hidden" name="_method" value="POST" />
    					<input type="hidden" name="id" value="{{old('id',$contents->id)}}">
                        @else
    					<input type="hidden" name="id" value="">
    					@endif
    					<div class="col-sm-12">
    						<div class="from_add">
    							<label>{{__('Title')}}:</label>
    							<input type="text" class="block mt-1 w-full" name="about_title" value="@if(!empty($contents->about_title)) {{$contents->about_title}} @else {{old('about_title')}} @endif" required><br>
    							<label>{{__('Description')}}:</label>
    							<textarea name="about_des" id="myeditor" class="form-control" placeholder="{{__('Description')}}">@if(!empty($contents->about_des)) {{$contents->about_des}} @else {{old('about_des')}} @endif</textarea>
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