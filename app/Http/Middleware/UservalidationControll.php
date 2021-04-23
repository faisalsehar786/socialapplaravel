<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
class UservalidationControll
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

      $username=$request->route('username');
     $userObj=User::where('username',$username);

     
     if ($userObj->count()>0) {
     
     if ($userObj->first()->activation=='off') {
         return redirect('/activation/'.$userObj->first()->username)->with('error','Please Activate Account Fill the Details Below !');   
     }else{
         
     }
        

      } else {
           return redirect('/login'); 
      }

    
        return $next($request);
    }
}
