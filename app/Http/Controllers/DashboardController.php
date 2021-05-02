<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CH;
use App\User; 
use DB;
use Auth;
use App\Charts\UserChart;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;
class DashboardController extends Controller
{
    public function index() {
       


   
        
$chart_options = [
           'chart_title' => 'Users by months',
    'report_type' => 'group_by_date', 
    'model' => 'App\User',
    'group_by_field' => 'created_at',
    'group_by_period' => 'week',
    'chart_type' => 'bar',
    ];

    $chart1 = new LaravelChart($chart_options);
 

    return view('admin.dashboard', compact('chart1'));


       


       
        
    }
} 
