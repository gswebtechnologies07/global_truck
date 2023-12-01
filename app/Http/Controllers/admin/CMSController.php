<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CmsContent;
use App\Models\Setting;
use App\Models\Cms;

class CMSController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function sexualPolicyEdit()
    {
        $contents = CmsContent::first();
        return view('admin.cms.sexualPolicyEdit', compact('contents'));
    }


    public function sexualPolicyUpdate(Request $request)
    {
        $this->validate($request, [
            'sexual_harassment_title' => 'required|max:255',
            'sexual_harassment_des' => 'required',
        ]);

        if (!empty($request->id)) {
            $terms = CmsContent::findOrFail($request->get('id'));
            $terms->sexual_harassment_title = $request->get('sexual_harassment_title');
            $terms->sexual_harassment_des = $request->get('sexual_harassment_des');
            $terms->save();
        } else {
            $terms = new CmsContent([
                'sexual_harassment_title' => $request->get('sexual_harassment_title'),
                'sexual_harassment_des' => $request->get('sexual_harassment_des'),
            ]);
            $terms->save();
        }
        return redirect()->back()->with('success', __("Data updated"));
    }


    public function stuComProEdit()
    {
        $contents = CmsContent::first();
        return view('admin.cms.stuComProEdit', compact('contents'));
    }


    public function stuComProUpdate(Request $request)
    {
        $this->validate($request, [
            'stu_com_title' => 'required|max:255',
            'stu_com_des' => 'required',
        ]);

        if (!empty($request->id)) {
            $terms = CmsContent::findOrFail($request->get('id'));
            $terms->stu_com_title = $request->get('stu_com_title');
            $terms->stu_com_des = $request->get('stu_com_des');
            $terms->save();
        } else {
            $terms = new CmsContent([
                'stu_com_title' => $request->get('stu_com_title'),
                'stu_com_des' => $request->get('stu_com_des'),
            ]);
            $terms->save();
        }
        return redirect()->back()->with('success', __("Data updated"));
    }


    public function feePolicyEdit()
    {
        $contents = CmsContent::first();
        return view('admin.cms.feePolicyEdit', compact('contents'));
    }


    public function feePolicyUpdate(Request $request)
    {
        $this->validate($request, [
            'fee_title' => 'required|max:255',
            'fee_des' => 'required',
        ]);

        if (!empty($request->id)) {
            $terms = CmsContent::findOrFail($request->get('id'));
            $terms->fee_title = $request->get('fee_title');
            $terms->fee_des = $request->get('fee_des');
            $terms->save();
        } else {
            $terms = new CmsContent([
                'fee_title' => $request->get('fee_title'),
                'fee_des' => $request->get('fee_des'),
            ]);
            $terms->save();
        }
        return redirect()->back()->with('success', __("Data updated"));
    }


    public function expulsionPolicyEdit()
    {
        $contents = CmsContent::first();
        return view('admin.cms.expulsionPolicyEdit', compact('contents'));
    }


    public function expulsionPolicyUpdate(Request $request)
    {
        $this->validate($request, [
            'expulsion_title' => 'required|max:255',
            'expulsion_des' => 'required',
        ]);

        if (!empty($request->id)) {
            $terms = CmsContent::findOrFail($request->get('id'));
            $terms->expulsion_title = $request->get('expulsion_title');
            $terms->expulsion_des = $request->get('expulsion_des');
            $terms->save();
        } else {
            $terms = new CmsContent([
                'expulsion_title' => $request->get('expulsion_title'),
                'expulsion_des' => $request->get('expulsion_des'),
            ]);
            $terms->save();
        }
        return redirect()->back()->with('success', __("Data updated"));
    }




    public function aboutEdit()
    {
        $contents = CmsContent::first();
        return view('admin.cms.aboutEdit', compact('contents'));
    }


    public function aboutUpdate(Request $request)
    {
        $this->validate($request, [
            'about_title' => 'required|max:255',
            'about_des' => 'required',
        ]);

        if (!empty($request->id)) {
            $terms = CmsContent::findOrFail($request->get('id'));
            $terms->about_title = $request->get('about_title');
            $terms->about_des = $request->get('about_des');
            $terms->save();
        } else {
            $terms = new CmsContent([
                'about_title' => $request->get('about_title'),
                'about_des' => $request->get('about_des'),
            ]);
            $terms->save();
        }
        return redirect()->back()->with('success', __("Data updated"));
    }


    public function settingsEdit()
    {
        $settings = Setting::first();
        return view('admin.cms.settingsEdit', compact('settings'));
    }


    public function settingsUpdate(Request $request)
    { 
        
        $logo_name = $request->old_logo;
        $logo = $request->file('new_logo');
        if ($logo != '') {
            $logo_name = time().'.'.$logo->getClientOriginalExtension();
          
            $logo->move(public_path('images/settings/') , $logo_name);
        } 
        
        //fav icon
        $fav_icon_name = $request->old_fav_icon;
        $fav_icon = $request->file('new_fav_icon');
        if ($fav_icon != '') {
            $fav_icon_name = time().'.'.$fav_icon->getClientOriginalExtension();
          
            $fav_icon->move(public_path('images/settings/') , $fav_icon_name);
        } 
        
        
        $user = Setting::findOrFail($request->get('id'));
        $user->site_title = $request->get('site_title');
        
        $user->meta_key = $request->get('meta_key');
        $user->meta_description = $request->get('meta_description');
        $user->meta_title = $request->get('meta_title');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        $user->facebook = $request->get('facebook');
        $user->instagram = $request->get('instagram');
        $user->operating_hours = $request->get('operating_hours');
        $user->twitter = $request->get('twitter');
        // $user->linkedin = $request->get('linkedin');
        // $user->footer_description = $request->get('footer_description');
        $user->year_of_development = $request->get('year_of_development');
        // $user->signature = $request->get('signature');
        // $user->cookies  = $request->get('cookies');
   
   ///For logo
        if ($request->old_logo != null) {
            if ($request->file('new_logo')) {
                $file = public_path('/images/settings/' . "/" . $request->old_logo);
                if (file_exists($file)) {
                    unlink($file);
                }
                $user->logo = $logo_name;
            }
        } else {
            $user->logo = $logo_name;
        }
        
        
        
        //for image
         if ($request->old_fav_icon != null) {
            if ($request->file('new_fav_icon')) {
                $file = public_path('/images/settings/' . "/" . $request->old_fav_icon);
                if (file_exists($file)) {
                    unlink($file);
                }
                $user->fav_icon = $fav_icon_name;
            }
        } else {
            $user->fav_icon = $fav_icon_name;
        }



        $user->updated_at = date('Y-m-d');
        $user->save();
        
         return redirect()->back()->with('success', __("Settings updated successfully"));
    }
    
    
    ///New Routes
    
     public function cmsList()
    {    
        $cms = Cms::get();
        return view('admin.cms.cms_list', compact('cms'));
    }
    
      public function addCms()
    {    
        return view('admin.cms.add_cms');
    }
    
     public function store_cms(Request $request)
    {   
        
         $request->validate([
            'page_name' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);
            
        $cms = new Cms([
            'page_name' =>  $request->get('page_name'),
            'title' =>   $request->get('title'),
            'description' =>   $request->get('description'),
            'show_in_footer' =>   $request->get('show_in_footer'),
            'status' =>   'enable',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);
        $cms->save();
        return redirect()->route('cms-list')->with('success', __("Page Added Successfully"));
    }
    
    
    
    public function edit_cms($id)
    {
        $cms = Cms::findorFail($id);
        return view('admin.cms.edit_cms',compact('cms'));
    }
    
    
     public function update_cms(Request $request)
    {
        
        $request->validate([
            'page_name' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);
        
        $cms = Cms::findOrFail($request->get('id'));
        $cms->page_name = $request->get('page_name');
        $cms->title = $request->get('title');
        $cms->description = $request->get('description');
        $cms->show_in_footer = $request->get('show_in_footer');
        $cms->updated_at = date('Y-m-d');
        $cms->save();
        
         return redirect()->route('cms-list')->with('success', __("Page updated successfully"));
    }
    
    
    
    public function updateCmsStatus(Request $request)
    {
        Cms::where('id',$request->id)->update([
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
        $cms = Cms::where('id', $id)->first();
        $cms->delete();
        return redirect()->route('cms-list')->with('success', __("Page Deleted Successfully"));
    }
    
    
    public function getPage($id)

    {

		$cms = Cms::where('page_name', 'like', $id)->first();

		if(null === $cmsContent = CmsContent::getContentByPageId($cms->id))

		{

			echo 'No Content';exit;

		}

		return view('cms.cms_page');

    }
    
}
