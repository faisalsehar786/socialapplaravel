<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Links;
use App\LinkMockups;
use Auth;
use App\Linkorder;
use Illuminate\Http\Response;
use App\User;
use JeroenDesloovere\VCard\VCard;
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


  if (!empty($sharelinksOrder->first())) {
    if (!empty($sharelinksOrder->first()->order)) {
      
     $pattranArray = explode(',',$sharelinksOrder->first()->order);
    foreach ($pattranArray as $value) {
      $orderArray[]= Links::with('linksmockup')->where('user_id',Auth::user()->id)->where('link_mock_id',$value)->first();
    }
   
   // print_r($orderArray);
   $objectRet= $orderArray;

    }else {
      $objectRet=$sharelinks;
    }
    

   }else {
    
     $objectRet=$sharelinks;
   }
  return json_encode($objectRet);
}


 

public function links_ajax_shareLink_get_order_display($id){


   $profileID=$id;
  $orderArray=array();
  $sharelinks=Links::with('linksmockup')->where('user_id',$profileID)->get();

 $sharelinksOrder=Linkorder::where('user_id',$profileID);


  if (!empty($sharelinksOrder->first())) {
    if (!empty($sharelinksOrder->first()->order)) {
      
     $pattranArray = explode(',',$sharelinksOrder->first()->order);
    foreach ($pattranArray as $value) {
      $orderArray[]= Links::with('linksmockup')->where('user_id',$profileID)->where('link_mock_id',$value)->first();
    }
   
   // print_r($orderArray);
   $objectRet= $orderArray;

    }else {
      $objectRet=$sharelinks;
    }
    

   }else {
    
     $objectRet=$sharelinks;
   }
  return json_encode($objectRet);
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
   
  Linkorder::where('user_id',Auth::user()->id)->update(['bgimg'=>Null]);
}else {
   Linkorder::create(['user_id'=>Auth::user()->id,'bgimg'=>Null]);
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


     
      // $request->validate([
      //       'backgroundImage' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            
      //   ]);

    if (!empty($request->file('file'))) {
  


        $image = $request->file('file');
       if (!empty( $image)) {
             $image = $request->file('file');
            $image_name = time() . uniqid(). '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('frontend/assets/img/');
            $image->move($destinationPath, $image_name);
       }
   
    $headerlogo=$image_name;

     }else {
  


     

       $headerlogo = $request->headerlogoimagehidden;
        $headerlogoimage = $request->file('backgroundImage');
       if (!empty($headerlogoimage)) {
             $headerlogoimage = $request->file('backgroundImage');
             $headerlogo = time() . uniqid(). '.' . $headerlogoimage->getClientOriginalExtension();
            $headerlogoimagedestinationPath = public_path('frontend/assets/img/');
            $headerlogoimage->move($headerlogoimagedestinationPath, $headerlogo);
       }

       }

 $orderSetting=Linkorder::where('user_id',Auth::user()->id)->count();
        if ($orderSetting>0) {
   
  Linkorder::where('user_id',Auth::user()->id)->update(['bgimg'=>$headerlogo]);
}else {
   Linkorder::create(['user_id'=>Auth::user()->id,'bgimg'=>$headerlogo]);
}
     
return redirect()->back()->with('message','Background Image Set Successfully');

}




public function saveVacard($id){


$UDATA=User::where('id',$id);
if ($UDATA->count()>0) {


  // define vcard
$vcard = new VCard();
 $userData=$UDATA->first();
// define variables
$lastname ='';
$firstname = $userData->usernanme_by_user;
$additional = '';
$prefix = '';
$suffix = '';

// add personal data
$vcard->addName($firstname);
$vcard->addEmail($userData->email);
$vcard->addPhoneNumber($userData->phone);
$vcard->addURL(route('front-home').'/'.$userData->username);


// add work data
// $vcard->addCompany('Siesqo');
// $vcard->addJobtitle('Web Developer');
// $vcard->addRole('Data Protection Officer');
// $vcard->addEmail('info@jeroendesloovere.be');
// $vcard->addPhoneNumber(1234121212, 'PREF;WORK');
// $vcard->addPhoneNumber(123456789, 'WORK');
// $vcard->addAddress(null, null, 'street', 'worktown', null, 'workpostcode', 'Belgium');
// $vcard->addLabel('street, worktown, workpostcode Belgium');
// $vcard->addURL('http://www.jeroendesloovere.be');



// return vcard as a string
//return $vcard->getOutput();

// return vcard as a download
//return $vcard->download();

// save vcard on disk
//$vcard->setSavePath('/path/to/directory');
//$vcard->save();

// $userData=$UDATA->first();
// $vcard = new VCard();
// $lastname ='';
// $firstname =$userData->name;
// $additional ='';
// $prefix = '';
// $suffix = '';
  
// // add personal data
// $vcard->addName($firstname, $additional, $prefix, $suffix);
// $vcard->addEmail($userData->email);
// $vcard->addPhoneNumber($userData->phone);
// $vcard->addURL(route('front-home').'/'.$userData->username);

// return $vcard->download();

$response = new Response();
$response->setContent($vcard->getOutput());
$response->setStatusCode(200);
$response->headers->set('Content-Type', 'text/x-vcard');
$response->headers->set('Content-Disposition', 'attachment; filename="' . $userData->name . '.vcf"');
$response->headers->set('Content-Length', mb_strlen($vcard->getOutput(), 'utf-8'));

return $response;
}else {
  return redirect()->back()->with('error','Data Not Found...!');
}

}

}
