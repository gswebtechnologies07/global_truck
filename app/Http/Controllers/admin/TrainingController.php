<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\Training;

class TrainingController extends Controller
{
  
  
    public function index()
    {   
        
        $training = Training::first();
        return view('admin.home.training_strategies_edit', compact('training'));
    }
    
    
	 public function training_update(Request $request)
       {
         $image_name = $request->old_image;
        if($request->new_image!=null){
             $image = $request->file('new_image');
             if ($image != '') {
                 $image_name = time().'.'.$image->getClientOriginalExtension();
                 $image->move(public_path('/images/home/') , $image_name);
             }
        }
        $user = Training::findOrFail($request->get('id'));
        $user->title = $request->get('title');
        
        $user->description = $request->get('description');
        

         if ($request->old_image != null) {
             if ($request->file('new_image')) {
                $file = public_path('/images/home/' . "/" . $request->old_image);
                 if (file_exists($file)) {
                     unlink($file);
                 }
                 $user->image = $image_name;
             }
         } else {
             $user->image = $image_name;
         }

        $user->updated_at = date('Y-m-d');
        $user->save();
        
         return redirect()->back()->with('success', __("Updated successfully"));
    }
    
    
	 
	 
	 

    
}
