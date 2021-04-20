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

Route::post('/guest_user', 'Api\LoginController@guest_user');

Route::post('/getCategoryBusinesscard', 'Api\LoginController@getCategoryBusinesscard');

Route::post('/getBusinesscardDetail', 'Api\LoginController@getBusinesscardDetail');

Route::post('/updateProfile', 'Api\LoginController@updateProfile');

Route::post('/changePassword', 'Api\LoginController@changePassword');
Route::post('/contactUs', 'Api\LoginController@contactUs');


Route::post('/cardFavUnfav', 'Api\card@cardFavUnfav');
Route::post('/myFavCard', 'Api\card@myFavCard');
Route::post('/saveCard', 'Api\card@saveCard');
Route::post('/myCard', 'Api\card@myCard');

Route::post('/userCard', 'Api\card@userCard');
 
Route::post('/cardPurchase', 'Api\card@cardPurchase');
Route::post('/deleteCard', 'Api\card@deleteCard');

Route::post('/addrolodex', 'Api\card@addrolodex');
Route::post('/getUserRolodex', 'Api\card@getUserRolodex');
Route::post('/deleteRolodexUser', 'Api\card@deleteRolodexUser');

Route::get('/check_device/{user_id}/{card_id}', 'Api\card@check_device');  
//Route::get('/user/{id}', 'Api\ProfileController@getDetailsWeb'); 
  
Route::post('/user_share_card', 'Api\card@user_share_card');

Route::post('/user_purchase_app','Api\card@user_purchase_app');
 
Route::post('/check_purchase_app_date','Api\card@check_purchase_app_date');

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