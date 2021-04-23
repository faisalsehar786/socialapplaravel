<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Role;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PragmaRX\Countries\Package\Countries;
class RegisterController extends Controller 
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required','string', 'max:255','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255','unique:users'],
            'password' => ['required', 'string', 'min:5'],
           
        ]);
    } 

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {


     
        return User::create([
          
            'username' => $data['username'],
            'email' => $data['email'],

            'password' => Hash::make($data['password']),
            
            

        ]);
    }


   
   public function update_register_user(Request $request)
   {

   $validatedData = $request->validate([
   'username' => ['required','string', 'max:255','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255','unique:users'],
    'password' => ['required', 'string', 'min:5'],
   ]);

 
   // if (User::where('username',$request->usernamepre)->count()>0) {


   //  if (User::where('email',$request->emailpre)->count()===1) {
      
      $updateUser=User::where('username',$request->usernamepre);
      $updateUser->update([
        'username' =>$request->username,
        'email' =>$request->email,
        'password' => Hash::make($request->password),
        'activation' =>'on',

        ]); 
      
          return redirect('/login')->with('message','Congratulation your Account is Activated Successfully Please login Now !');  

   //        }else {

   //           return redirect()->back()->with('error','Please Enter Unique Email Address This Email has been Alreay in use !');
              
   //        }  
         

         
   // }else {
   //       return redirect()->back()->with('error','Please Enter Unique Username This Username has been Alreay in use !');
   // }

   }



public function register(Request $request)
   {
   $this->validator($request->all())->validate();

   event(new Registered($user = $this->create($request->all())));

   Auth::logout();

   return $this->registered($request, $user)
                ?: redirect($this->redirectPath());
}

 // public function redirectTo()
 //    {
 //       if (auth()->user()->is_authenticated) {
 //            return '/';
 //        } else {
 //            return '/';
 //        }
 //    }

    public function getRegister($username)
{
       $singleUser=User::where('username',$username)->first();
   
    return view('auth.register',compact('singleUser','username'));
}
}
