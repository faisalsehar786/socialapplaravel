<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LinkMockups;
use Illuminate\Support\Facades\Validator;
class LinksMockupsController extends Controller
{
    

public function index()
{

	return view('admin.sociallinks.dashboard')->with('sociallinks',LinkMockups::where('del','no')->get());
	
}



  public function social_links_add(Request $request){

  	$request->validate([
            'name' => ['required','string', 'max:255','unique:linksmockups'],
            'slug' => ['required', 'string','unique:linksmockups'],
            
        ]);

        $optional_logo = '';
        $optional_logoimage = $request->file('icon');
       if (!empty($optional_logoimage)) {
       	     $optional_logoimage = $request->file('icon');
             $optional_logo = time() . uniqid(). '.' . $optional_logoimage->getClientOriginalExtension();
            $optional_logoimagedestinationPath = public_path('frontend/assets/img/icon/');
            $optional_logoimage->move($optional_logoimagedestinationPath, $optional_logo);
       }
     

     $create=LinkMockups::create([
        'name'=>$request->name,
        'slug'=>$request->slug,
        'placeholder'=>$request->placeholder,
        'icon'=>$optional_logo,
        'url_type'=>$request->url_type,
        'comp_url'=>$request->comp_url,
        'base_url'=>$request->base_url, 
        'sub_part_url'=>$request->sub_part_url
       ]);

     if ( $create) {  

     	return redirect()->back()->with('message','Record Add SuccessFully');
     }

     


     

   }


public function social_links_del(Request $request){


	 $user=LinkMockups::find($request->sub_id)->update(['del'=>'yes']);
        // $stst=LinkMockups::destroy($request->sub_id);
      if ($stst) {
            return response()->json(['status' => 'ok', 'id' => $request->sub_id]);
        } else {
            return response()
                ->json(['status' => 'error']);
        }
}


public function social_links_edit($id){

 return view('admin.sociallinks.editlink')->with('sociallink', LinkMockups::where('id',$id)->first()); 

}



public function social_link_update(Request $request){

	// $request->validate([
 //            'name' => ['required','string', 'max:255'],
 //            'slug' => ['required', 'string',],
           
 //        ]);

	 $optional_logo =$request->hidden_icon;
        $optional_logoimage = $request->file('icon');
       if (!empty($optional_logoimage)) {
       	     $optional_logoimage = $request->file('icon');
             $optional_logo = time() . uniqid(). '.' . $optional_logoimage->getClientOriginalExtension();
            $optional_logoimagedestinationPath = public_path('frontend/assets/img/icon/');
            $optional_logoimage->move($optional_logoimagedestinationPath, $optional_logo);
       }
     
    

     $create=LinkMockups::where('id',$request->idL)->update([
        
        'placeholder'=>$request->placeholder,
        'icon'=>$optional_logo,
        'url_type'=>$request->url_type,
        'comp_url'=>$request->comp_url,
        'base_url'=>$request->base_url, 
        'sub_part_url'=>$request->sub_part_url
       ]);
    
     if ( $create) {  

     	return redirect()->back()->with('message','Record updated SuccessFully');
     }

}


}
