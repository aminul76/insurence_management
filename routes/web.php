<?php

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

Route::get('/', function () {
    return view('welcome');
});
//login route
Route::group(['prefix' => '/hiddeadmin'], function(){
    Route::get('/','SuperAdmin\AdminController@dashboard')->name('admin.dashboard');
    Route::get('/login', 'SuperAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/submit', 'SuperAdmin\LoginController@login')->name('admin.login.submit');
    Route::post('/logout/submit', 'SuperAdmin\LoginController@logout')->name('admin.logout');
  });

  Route::group(['prefix' => '/customer'], function(){
    Route::get('/','Customer\CustomerController@dashboard')->name('customer.dashboard');
    Route::get('/login', 'Customer\LoginController@showLoginForm')->name('customer.login');
    Route::post('/submit', 'Customer\LoginController@login')->name('customer.login.submit');
    Route::post('/logout/submit', 'Customer\LoginController@logout')->name('customer.logout');
  });

  Route::group(['prefix' => '/manager'], function(){
    Route::get('/','Manager\ManagerController@dashboard')->name('manager.dashboard');
    Route::get('/login', 'Manager\LoginController@showLoginForm')->name('manager.login');
    Route::post('/submit', 'Manager\LoginController@login')->name('manager.login.submit');
    Route::post('/logout/submit', 'Manager\LoginController@logout')->name('manager.logout');
  });
//

//admin route
Route::group(['prefix' => '/hiddeadmin'], function(){
  Route::get('/addcustomer','SuperAdmin\AdminController@addcustomer')->name('admin.addcustomer');
  Route::post('/storecustomer','SuperAdmin\AdminController@storecustomer')->name('admin.storecustomer');
// show all user

  Route::get('/allcustomer','SuperAdmin\AdminController@allcustomer')->name('admin.allcustomer');

  Route::get('/paycustomer/{id}','SuperAdmin\AdminController@paycustomer')->name('admin.paycustomer');

  Route::post('/paystore','SuperAdmin\AdminController@paystore')->name('admin.paystore');

  Route::get('/paymentdetails','SuperAdmin\AdminController@paymentdetails')->name('admin.paymentdetails');

  Route::get('/paymenthistory/{id}','SuperAdmin\AdminController@paymenthistory')->name('admin.paymenthistory');
  
  Route::get('/cusprofile','SuperAdmin\AdminController@cusprofile')->name('admin.cusprofile');

  Route::get('/personprofile/{id}','SuperAdmin\AdminController@personprofile')->name('admin.personprofile');

  Route::post('/passwordupdate/{id}','SuperAdmin\AdminController@updatePassword')->name('password.update');

  Route::get('/adminpassword','SuperAdmin\AdminController@adminpassword')->name('admin.adminpassword');

  Route::put('/adminpasswordupdate','SuperAdmin\AdminController@adminpasswordupdate')->name('adminpasswordupdate');



});

//Customer route

Route::group(['prefix' => '/customer'], function(){
  Route::get('/profile','Customer\CustomerController@profile')->name('customer.profile');


});

