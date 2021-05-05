<?php
namespace App\Http\Controllers\Account;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Crypt;
use PragmaRX\Countries\Package\Countries;
class ProfileController extends Controller
{
public function index(){


	return view('frontEnd.myAccount.index');
}


public function updateUserData(Request $request){
   
  

if (!empty($request->file('file')) || !empty($request->imagehidden)) {
  

  $image_name = $request->imagehidden;
        $image = $request->file('file');
       if (!empty( $image)) {
             $image = $request->file('file');
            $image_name = time() . uniqid(). '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('assets/img/');
            $image->move($destinationPath, $image_name);
       }


  $updateUser=User::where('id',Auth::user()->id);
  $updateUser->update([
        'image' =>$image_name,
        ]); 

 return redirect()->back()->with('message','Profile Picture Update Successfully !');

}else {


  $updateUser=User::where('id',Auth::user()->id);
  $updateUser->update([
        'name' =>$request->name,
        'phone' =>$request->phone,
        'about' =>$request->about,
        // 'image' =>$image_name,
       
        ]); 

  return redirect()->back()->with('message','Profile Update Successfully !');
  
}

 

   // 
  
}







public function mangelinks(){


	return view('frontEnd.myAccount.mangelinks');
}

public function customize(){


	return view('frontEnd.myAccount.customize');
}

public function profile(){


	return view('frontEnd.myAccount.profile'); 
}

}