<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
class UservalidationControll2
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

     
     if ($userObj->count()>0 && $userObj->first()->activation=='on') {
     
      return redirect('/'.$userObj->first()->username);
        

      }elseif ($userObj->count()>0 && $userObj->first()->activation=='off') {
        
      }

       else {
           return redirect('/login'); 
      }
        return $next($request);
    }
}
