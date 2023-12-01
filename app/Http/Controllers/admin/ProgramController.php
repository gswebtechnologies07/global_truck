<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{  
    
    
    public function program_list()
    {    
        $program = Program::get();
        return view('admin.program.program_list', compact('program'));
    }
    
    
      public function add_program()
    {    
        return view('admin.program.add_program');
    }
    
    
     public function store_program(Request $request)
    {   
         $imageName = "";
        if(request()->hasfile('image')){
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('/images/programs/'), $imageName);
        } 
            
        $banner = new Program([
            'title' =>  $request->get('title'),
            'description' =>  $request->get('description'),
            'image' =>  $imageName,
            'status' => 'enable',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);
        $banner->save();
      
        return redirect()->route('program-list')->with('success', __("New Program Added successfully"));
    }
    
    
    
    
     public function edit_programs($id)
    {
        $program = Program::findorFail($id);
        return view('admin.program.edit_program', compact('program'));
    }
    
    
    
    
    public function update_programs(Request $request)
    {
         $image_name = $request->old_image;
        if($request->new_image!=null){
             $image = $request->file('new_image');
             if ($image != '') {
                 $image_name = time().'.'.$image->getClientOriginalExtension();
                 $image->move(public_path('/images/programs/') , $image_name);
             }
        }
        $user = Program::findOrFail($request->get('id'));
        $user->title = $request->get('title');
        
        $user->description = $request->get('description');
        

         if ($request->old_image != null) {
             if ($request->file('new_image')) {
                $file = public_path('/images/programs/' . "/" . $request->old_image);
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
        
         return redirect()->route('program-list')->with('success', __("Updated successfully"));
    }
    
    
    
    
    public function updateProgramStatus(Request $request)
    {
        Program::where('id',$request->id)->update([
            'status'=>($request->status)
        ]);
        
        if($request->status=='enable'){
            $message= __("Status Enabled");
        }
        if($request->status=='disable'){
            $message= __("Status Disabled");
        }
        return ['message'=>$message];
    }
    
    
     public function delete($id)
    {
        $program = Program::where('id', $id)->first();
        $program->delete();
        return redirect()->route('program-list')->with('success', __("Program Deleted Successfully"));
    }
    

    

   
}
