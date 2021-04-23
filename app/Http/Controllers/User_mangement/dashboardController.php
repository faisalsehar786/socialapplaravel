<?php

namespace App\Http\Controllers\user_mangement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use App\rolesauthority;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use CH;
class dashboardController extends Controller
{
    


public function index(){


   
    
  
     
        $allroles=Role::all();
        $allusers=User::with('Role')->get();
   
    
	return view('admin.user_mangement.dashboard',compact('allroles','allusers')); 
}



public function getall_user_ajax(){


// {{ (isset($user->Role)) ? $user->Role->role : '' }}
   return datatables()
                ->of(
                    User::orderBy('id', 'desc')->get()
                )->addColumn(
                    'activationlink',
                    function ($data) {

                    $username=$data->username;

                        if ($username) {
                            $link =route('front-home').'/'.$username;
                        } 

                        return  $link;
                    }
                )->addColumn(
                    'status',
                    function ($data) {

                     $active=$data->activation;

                        if ($active=='on') {
                            $label = '<span class="label label-success">Activated</span>';
                        } else {
                            $label = '<span class="label label-danger">Not Activated</span>';
                        }

                        return $label;
                    }
                )->addColumn(
                    'action',
                    function ($data) {
                        $button = ' <div class="btn-group">
                  <button type="button" class="btn btn-danger btn-sm shadow-lg border-0 dropdown-toggle btn-block shadow-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Operations
                  </button>';

                        $button .= '<div class="dropdown-menu">
                   
                
                    <a class="dropdown-item" href="' . route('edit_user_data', ['id' => Crypt::encrypt($data->id)]) . '">Edit</a>
                   
                    <button class="dropdown-item deleteAuction btn-danger btn-block"   del-id=' . $data->id . '>Delete</button>
                  </div>
                </div>';
                        return $button;
                    }
                )->rawColumns(['action', 'status','activationlink'])
                ->make(true);
        }







public function get_authority()
{

    $data = CH::getVendorAuthorities();
    return json_encode($data);
}   
 
}
