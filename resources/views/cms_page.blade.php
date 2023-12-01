@extends('layouts.front_main')
@section('content')
@if(Request::route('slug')==$cms->slug)
<section class="mew_oen">
   <div class="container ">
      <div class="row">
         <div class="our_tream_heading new_line text-center">
            <h1 class="fw-bold">{{$cms->title}}</h1>
         </div>
         <div class="new_desiocn mt-4">
            {!! $cms->description !!}
         </div>
      </div>
   </div>
</section>
@endif
@endsection