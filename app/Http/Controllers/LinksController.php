<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Links;
use App\LinkMockups;
use Auth;
use App\Linkorder;
class LinksController extends Controller
{
    

public function links_ajax_user_save(Request $requset){


if (Links::where('link_mock_id',$requset->link_id)->where('user_id',Auth::user()->id)->count()>0) {
  return json_encode(['status'=>'exist']);	

}else {
  $countC=Linkorder::where('user_id',Auth::user()->id);
  if (!empty($countC->first()->order)) {
    $countC->update(['order'=>$countC->first()->order.','.$requset->link_id]);
  }
 Links::create(['link_mock_id'=>$requset->link_id,'name'=>$requset->slug,'user_id'=>Auth::user()->id]);
	 return json_encode(['status'=>'ok']);	
}

} 

public function links_ajax_user_del(Request $requset){


Links::where('link_mock_id',$requset->link_id)->where('user_id',Auth::user()->id)->delete();
return json_encode(['status'=>'ok']);
}






public function links_ajax_shareLink_get(Request $requset){


   $orderArray=array();
  $sharelinks=Links::with('linksmockup')->where('user_id',Auth::user()->id)->get();

 $sharelinksOrder=Linkorder::where('user_id',Auth::user()->id);

 $pattranArray = explode(',',$sharelinksOrder->first()->order);



  if ($sharelinksOrder->count()>0 &&  !empty($sharelinksOrder->first()->order)) {
   	
    foreach ($pattranArray as $value) {
      $orderArray[]= Links::with('linksmockup')->where('user_id',Auth::user()->id)->where('link_mock_id',$value)->first();
    }
   
   // print_r($orderArray);
   $objectRet= $orderArray;

   }else {
   	
   	 $objectRet=$sharelinks;
   }
	return json_encode($objectRet);
}


 

public function links_ajax_shareLink_get_order_display(Request $requset){

$sharelinks=Links::with('linksmockup')->where('user_id',Auth::user()->id)->get();

 $sharelinksOrder=Linkorder::where('user_id',Auth::user()->id);
  if ($sharelinksOrder->count()>0 &&  !empty($sharelinksOrder->first()->order)) {
    
   $objectRet='';

   }else {
    
     $objectRet=$sharelinks;
   }
  return json_encode( $objectRet);
} 



public function links_ajax_user_order_save(Request $requset){

$orderSetting=Linkorder::where('user_id',Auth::user()->id)->count();
$reqData=$requset->all();

if ($orderSetting>0) {
   
  Linkorder::where('user_id',Auth::user()->id)->update(['order'=>$reqData['order']]);
}else {
   Linkorder::create(['user_id'=>Auth::user()->id,'order'=>$reqData['order']]);
}
return json_encode(['status'=>$reqData['order']]);
}



public function links_ajax_user_order_data_save(Request $request){

foreach ($request->all() as $key => $value) {
 if ($key=='_token') { 
 }else {
$linksmockups=LinkMockups::where('slug',$key)->first();
Links::where('name',$key)->where('user_id',Auth::user()->id)->update(['url'=>$value]);

 }
}  
 
return json_encode(['status'=>'ok']);

}


 

public function links_ajax_user_Template_save(Request $request){

$orderSetting=Linkorder::where('user_id',Auth::user()->id)->count();

if (isset($request->bccolor)) {
 
  if ($orderSetting>0) {
   
  Linkorder::where('user_id',Auth::user()->id)->update(['bgcolor'=>$request->bccolor]);
}else {
   Linkorder::create(['user_id'=>Auth::user()->id,'bgcolor'=>$request->bccolor]);
}
  
}elseif (isset($request->removeimg)) {

   if ($orderSetting>0) {
   
  Linkorder::where('user_id',Auth::user()->id)->update(['bgimg'=>'']);
}else {
   Linkorder::create(['user_id'=>Auth::user()->id,'bgimg'=>'']);
}
  
}elseif(isset($request->temp)) {

   if ($orderSetting>0) {
   
  Linkorder::where('user_id',Auth::user()->id)->update(['temp'=>$request->temp]);
}else {
   Linkorder::create(['user_id'=>Auth::user()->id,'temp'=>$request->temp]);
}
  
}else {
  
}


return json_encode(['status'=>'ok']);




}


 
public function links_ajax_user_Template_backgroun_img(Request $request){
     
      $request->validate([
            'backgroundImage' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            
        ]);

    

      $orderSetting=Linkorder::where('user_id',Auth::user()->id)->count();

       $headerlogo = $request->headerlogoimagehidden;
        $headerlogoimage = $request->file('backgroundImage');
       if (!empty($headerlogoimage)) {
             $headerlogoimage = $request->file('backgroundImage');
             $headerlogo = time() . uniqid(). '.' . $headerlogoimage->getClientOriginalExtension();
            $headerlogoimagedestinationPath = public_path('frontend/assets/img/');
            $headerlogoimage->move($headerlogoimagedestinationPath, $headerlogo);
       }


        if ($orderSetting>0) {
   
  Linkorder::where('user_id',Auth::user()->id)->update(['bgimg'=>$headerlogo]);
}else {
   Linkorder::create(['user_id'=>Auth::user()->id,'bgimg'=>$headerlogo]);
}
     
return redirect()->back()->with('message','Background Image Set Successfully');

}


}
