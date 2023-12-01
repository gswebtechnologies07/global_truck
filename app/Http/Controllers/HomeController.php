<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\Banner;
use App\Models\About;
use App\Models\Enquiry;
use App\Models\Gallery;

class HomeController extends Controller
{
  
    public function index()
    {   
        $banner = Banner::get();
        return view('index', compact('banner'));
    }
    
    
    
	 public function about_us()
	 {   
	     $gallery = Gallery::get();
	     $about = About::get();
	     return view('about_us', compact('about','gallery'));
	 }


    
     public function contact_us()
	 {   
	     $contacts = Enquiry::get();
	     return view('contact_us',compact('contacts'));
	 }
	 
	 
	 
	  public function programs()
	 {   
	     return view('program');
	 }
	 
	 
	 
	 public function policies()
	 {
	     return view('policy');
	 }
	 
	 
	 public function air_brake()
	 {
	     return view('air_brake');
	 }
	 
	 
	 
	 public function dz_license_course()
	 {
	     return view('dz_license_course');
	 }
	 
	 
	 
	 public function az_license_course()
	 {
	     return view('az_license_course');
	 }
	 

    
    
}
