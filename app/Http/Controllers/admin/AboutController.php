<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Gallery;

class AboutController extends Controller
{
    
     public function about_edit()
    {
        $about = About::first();
        return view('admin.aboutUs.edit_about', compact('about'));
    }
    
    
      public function about_update(Request $request)
       {
         $image_name = $request->old_image;
        if($request->new_image!=null){
             $image = $request->file('new_image');
             if ($image != '') {
                 $image_name = time().'.'.$image->getClientOriginalExtension();
                 $image->move(public_path('/images/about/') , $image_name);
             }
        }
        $banner_image_name = $request->banner_old_image;
        if($request->banner_new_image!=null){
             $image2 = $request->file('banner_new_image');
             if ($image2 != '') {
                 $banner_image_name = time().'.'.$image2->getClientOriginalExtension();
                 $image2->move(public_path('/images/about/') , $banner_image_name);
             }
        }
        $user = About::findOrFail($request->get('id'));
        $user->title = $request->get('title');
        $user->description = $request->get('description');
         if ($request->old_image != null) {
             if ($request->file('new_image')) {
                $file = public_path('/images/about/' . "/" . $request->old_image);
                 if (file_exists($file)) {
                     unlink($file);
                 }
                 $user->image = $image_name;
             }
         } else {
             $user->image = $image_name;
         }
          if ($request->banner_old_image != null) {
             if ($request->file('banner_new_image')) {
                $file = public_path('/images/about/' . "/" . $request->banner_old_image);
                 if (file_exists($file)) {
                     unlink($file);
                 }
                 $user->banner_image = $banner_image_name;
             }
         } else {
             $user->banner_image = $banner_image_name;
         }
        $user->updated_at = date('Y-m-d');
        $user->save();
        
         return redirect()->back()->with('success', __("Updated successfully"));
    }
    
    
    
    
    public function gallery_list()
    {    
        $gallery = Gallery::get();
        return view('admin.aboutUs.gallery_list', compact('gallery'));
    }
    
    
    
    
     public function add_gallery()
    {
        return view('admin.aboutUs.add_gallery');
    }
    
    
     public function store_gallery(Request $request)
    {   
         $request->validate([
            'image' => ['required','image','max:2048','mimes:jpeg,png,jpg'],
              
        ],[
        'image.uploaded' => "Image must be less than or equal to 2MB",
        'image.mimes' => "Image must be jpeg,png,jpg",
       
        ]);
        
        
         $imageName = "";
        if(request()->hasfile('image')){
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('/images/about/'), $imageName);
        } 
            
        $gallery = new Gallery([
           
            'image' =>  $imageName,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);
        $gallery->save();
      
        return redirect()->route('gallery-list')->with('success', __("New Image Added successfully"));
    }
    
    
    
     public function edit_gallery($id)
    {
        $gallery = Gallery::findorFail($id);
        return view('admin.aboutUs.edit_gallery', compact('gallery'));
    }
    
    
    public function update_gallery(Request $request)
    {
           
        $request->validate([
        'new_image' => ['required','image','max:2048','mimes:jpeg,png,jpg'],
          
        ],[
        'new_image.uploaded' => "Image must be less than or equal to 2MB",
        'new_image.mimes' => "Image must be jpeg,png,jpg",
       
        ]);
         $image_name = $request->old_image;
        if($request->new_image!=null){
             $image = $request->file('new_image');
             if ($image != '') {
                 $image_name = time().'.'.$image->getClientOriginalExtension();
                 $image->move(public_path('/images/about/') , $image_name);
             }
        }
        $gallery = Gallery::findOrFail($request->get('id'));
       
         if ($request->old_image != null) {
             if ($request->file('new_image')) {
                $file = public_path('/images/about/' . "/" . $request->old_image);
                 if (file_exists($file)) {
                     unlink($file);
                 }
                 $gallery->image = $image_name;
             }
         } else {
             $gallery->image = $image_name;
         }

        $gallery->updated_at = date('Y-m-d');
        $gallery->save();
        
         return redirect()->route('gallery-list')->with('success', __("Updated successfully"));
    }


    public function delete($id)
    {
        $gallery = Gallery::where('id', $id)->first();
        $gallery->delete();
        return redirect()->route('gallery-list')->with('success', __("Image Deleted Successfully"));
    }

   
}
