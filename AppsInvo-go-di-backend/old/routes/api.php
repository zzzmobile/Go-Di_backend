<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//login_signup

Route::post('/login', 'Api\LoginController@login');
Route::post('/register', 'Api\LoginController@register');
Route::post('/logout', 'Api\LoginController@logout');
Route::post('/forgotPassword', 'Api\LoginController@forgotPassword');
Route::post('/resetPasswordByOTP', 'Api\LoginController@resetPasswordByOTP');
Route::post('/instalCountByPromocode', 'Api\LoginController@instalCountByPromocode');

Route::get('/getCategoryBusinesscard', 'Api\LoginController@getCategoryBusinesscard');

Route::post('/getBusinesscardDetail', 'Api\LoginController@getBusinesscardDetail');

Route::get('/reset', function () {
  Artisan::call('clear-compiled');
  Artisan::call('view:clear');
  Artisan::call('route:clear');
  Artisan::call('cache:clear');
  Artisan::call('config:clear');
  // Artisan::call('optimize');
  // Artisan::call('config:cache');   
  // Artisan::call('route:cache');   
  // Artisan::call('optimize', ['--force' => true]);
  Artisan::call('storage:link');
  echo "Done";
 });