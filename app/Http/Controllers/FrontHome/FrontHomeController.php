<?php

namespace App\Http\Controllers\FrontHome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use CH;
use Mail;
use Illuminate\Support\Str;
use PragmaRX\Countries\Package\Countries;
use Illuminate\Support\Facades\Crypt;



class FrontHomeController extends Controller
{
    public function index(){

          return view('frontEnd/home/front-home');

    }




}
 