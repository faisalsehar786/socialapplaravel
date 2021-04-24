<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
class SettingsController extends Controller
{
    

  public  function index()
  {
  	

  	return view('admin.settings.index')->with('settings',Settings::first());
  }


 public  function settings_update(Request $request)
 {


     $countData=Settings::count();

      $headerlogo = $request->headerlogoimagehidden;
        $headerlogoimage = $request->file('headerlogo');
       if (!empty($headerlogoimage)) {
       	     $headerlogoimage = $request->file('headerlogo');
             $headerlogo = time() . uniqid(). '.' . $headerlogoimage->getClientOriginalExtension();
            $headerlogoimagedestinationPath = public_path('frontend/assets/img/');
            $headerlogoimage->move($headerlogoimagedestinationPath, $headerlogo);
       }

       $footerlogo = $request->footerlogoimagehidden;
        $footerlogoimage = $request->file('footerlogo');
       if (!empty($footerlogoimage)) {
       	     $footerlogoimage = $request->file('footerlogo');
             $footerlogo = time() . uniqid(). '.' . $footerlogoimage->getClientOriginalExtension();
            $footerlogoimagedestinationPath = public_path('frontend/assets/img/');
            $footerlogoimage->move($footerlogoimagedestinationPath, $footerlogo);
       }


       $optional_logo = $request->optional_logoimagehidden;
        $optional_logoimage = $request->file('optional_logo');
       if (!empty($optional_logoimage)) {
       	     $optional_logoimage = $request->file('optional_logo');
             $optional_logo = time() . uniqid(). '.' . $optional_logoimage->getClientOriginalExtension();
            $optional_logoimagedestinationPath = public_path('frontend/assets/img/');
            $optional_logoimage->move($optional_logoimagedestinationPath, $optional_logo);
       }



     if ($countData <1) {
     	
     
     Settings::create([
     	'headerlogo'=>$headerlogo,
        'footerlogo'=>$footerlogo, 
        'optional_logo'=>$optional_logo,
        'backgroundcolor'=>$request->backgroundcolor,
        'buttoncolor'=>$request->buttoncolor,
        'borderpanelcolor'=>$request->borderpanelcolor,
        'sectioncolor'=>$request->sectioncolor,
        'footrtext'=>$request->footrtext,
        'copyright_text'=>$request->copyright_text,
        'social_link_show'=>$request->social_link_show,
        'fblink'=>$request->fblink,
        'mslink'=>$request->mslink,
        'login_page_meta'=>$request->login_page_meta,
        'after_login_page_meta'=>$request->after_login_page_meta,
        'mangelinks_page_meta'=>$request->mangelinks_page_meta,
        'customize_page_meta'=>$request->customize_page_meta,
        'profile_page_meta'=>$request->profile_page_meta,
        'activation_page_meta'=>$request->activation_page_meta
     

     ]);



     }elseif($countData>0){
     	
    

     	Settings::where('id',$request->settings_id)->update([
     	'headerlogo'=>$headerlogo,
        'footerlogo'=>$footerlogo, 
        'optional_logo'=>$optional_logo,
        'backgroundcolor'=>$request->backgroundcolor,
        'buttoncolor'=>$request->buttoncolor,
        'borderpanelcolor'=>$request->borderpanelcolor,
        'sectioncolor'=>$request->sectioncolor,
        'footrtext'=>$request->footrtext,
        'copyright_text'=>$request->copyright_text,
        'social_link_show'=>$request->social_link_show,
        'fblink'=>$request->fblink,
        'mslink'=>$request->mslink,
        'login_page_meta'=>$request->login_page_meta,
        'after_login_page_meta'=>$request->after_login_page_meta,
        'mangelinks_page_meta'=>$request->mangelinks_page_meta,
        'customize_page_meta'=>$request->customize_page_meta,
        'profile_page_meta'=>$request->profile_page_meta,
        'activation_page_meta'=>$request->activation_page_meta
     

     ]);



     }

 	return redirect()->back()->with('message','Settings Save Successfully !');

 	
 }


}
