<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Models\Setting;
use Mail;


class ContactUsController extends Controller
{
   
     public function storeContacts(Request $request)
    {   
        
        $request->validate( [
            'name' => ['required', 'string'],
            'email' => ['required','email'],
            'phone' => ['required','max:13'],
            'question' => ['required'],
        ]);
        $contacts = new Enquiry([
            'name' =>  $request->get('name'),
            'email' =>  $request->get('email'),
            'phone' =>  $request->get('phone'),
            'question' =>  $request->get('question'),
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);
        $contacts->save();
        
            $name  = $request->name; 
            $email   = $request->email;
            $phone  = $request->phone;
            $question  = $request->question;
            $toemail = get_setting('email');
            $today   = date("Y-m-d H:i");
        
         $data    = array('name'=>$name, 'email'=>$email, 'phone'=>$phone, 'question'=>$question,'toemail'=>$toemail);
           Mail::send('enquiryEmail', $data, function ($message) use ($data)
            {
                $message->subject('Enquiry');
                $message->from('globaltruck@gmail.com');
                $message->to($data['toemail']);
            });
        return redirect()->route('contact#scroll')->with('success', __("Thank you for your question We will get in touch with you shortly"));
       
    }
    
   

}
