<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




// admin Section Routes
Route::prefix('admin')->group(function ()
{
    Route::middleware('auth:admin')->group(function ()
    {
        // Dashboard
        Route::get('/', 'DashboardController@index');
        // Logout
        Route::get('/logout', 'AdminUserController@logout')
            ->name('admin-logout');
        /*
         *
         *user and role mange mangement
         *
        */
        Route::get('/user_mangement', 'User_mangement\dashboardController@index')
            ->name('user_mangement_homepanel');


            Route::get('/getall_user_ajax', 'User_mangement\dashboardController@getall_user_ajax')
            ->name('getall_user_ajax');

           Route::post('/delete_user_ajax', 'User_mangement\CreateuserController@delete_user_ajax')->name('delete_user_ajax');

      Route::get('/edit_user_data{id}', 'User_mangement\CreateuserController@edit_user_data')->name('edit_user_data');

        Route::post('/role', 'User_mangement\RoleController@insert')
            ->name('insert_user_role');
        Route::get('role/delete/{id}', 'User_mangement\RoleController@destroy')
            ->name('delete_role');
        Route::post('role/edit/{id}', 'User_mangement\RoleController@update')
            ->name('edit_role');
        Route::post('/', 'User_mangement\CreateuserController@insert')
            ->name('insert_user');
        Route::post('addauthority', 'User_mangement\CreateuserController@add_authority')
            ->name('addauthority');
        Route::get('user/delete/{id}', 'User_mangement\CreateuserController@destroy')
            ->name('delete_user');
        Route::post('user/edit/{id}', 'User_mangement\CreateuserController@update')
            ->name('edit_user');
        Route::post('checkrole', 'User_mangement\CreateuserController@check_role')
            ->name('checkrole');
        Route::get('getauthority', 'User_mangement\dashboardController@get_authority')
            ->name('getauthority');



///////////////////////// Settings //////////////////////////////////

Route::get('settings_dashboard', 'SettingsController@index')->name('settings_dashboard');
 Route::post('settings_update', 'SettingsController@settings_update')->name('settings_update');
///////////////////////// Settings send //////////////////////////////////

     });
 

    // Admin Login
    Route::get('/login', 'AdminUserController@index')
        ->name('admin-login');
    Route::post('/login', 'AdminUserController@store')
        ->name('admin-loginAttempt');
}); 

///////////////////////////////////////////////////////////////////



Auth::routes(); 
/*
 * front End Authenticated  Routes
*/


 // Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'FrontHome\FrontHomeController@index')->name('front-home');

Route::get('/activation/{username}', 'Auth\RegisterController@getRegister')
        ->name('getRegister')->middleware('userverification2');

Route::post('update_register_user', 'Auth\RegisterController@update_register_user')
        ->name('update_register_user');

 Route::get('{username}','Account\ProfileController@profile')->name('profile')->middleware('userverification');

Route::middleware('auth')->group(function ()
{

Route::group(['prefix' => 'mange'], function(){
 Route::get('myaccount','Account\ProfileController@index')->name('myaccount');
 Route::get('links','Account\ProfileController@mangelinks')->name('mangelinks');
 Route::get('customize_page','Account\ProfileController@customize')->name('customize_settings');

   
// myaccount Page Route

Route::post('/updateUserData', 'Account\ProfileController@updateUserData')->name('updateUserData');
  

// myaccount Page Route End

}); 
});  




// Route::get('command', function () {
    

//     /* php artisan migrate */
//     \Artisan::call('config:cache');
//     \Artisan::call('route:clear');
//      \Artisan::call('cache:clear');
//        \Artisan::call('view:clear');
//    return 'done';
// });