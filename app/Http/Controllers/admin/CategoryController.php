<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class CategoryController extends Controller
{  
    
    
     public function add_category()
    {    
        return view('admin.blog.add_category');
    }

    
    public function store_category(Request $request)
    {   
        
        $blog = new Category([
            'category' =>  $request->get('title'),
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);
        $blog->save();
      
        return redirect()->route('category-list')->with('success', __("New Blog Added successfully"));
    }
    
    
     public function category_list()
    {    
        $categroies = Category::get();
        return view('admin.blog.category_list',compact('categroies'));
    }
    
    
     public function edit_category($id)
    {
        $categroies = Category::findorFail($id);
        return view('admin.blog.edit_category', compact('categroies'));
    }
    
    
    
    public function update_category(Request $request)
      {
        
        $categroies = Category::findOrFail($request->get('id'));
        $categroies->category = $request->get('category');
         
        $categroies->updated_at = date('Y-m-d');
        $categroies->save();
        
         return redirect()->route('category-list')->with('success', __("Updated successfully"));
    }
    
    
    
    

    public function delete($id)
    {
        $categroies = Category::where('id', $id)->first();
        $categroies->delete();
        return redirect()->route('category-list')->with('success', __("Category Deleted Successfully"));
    }
}
