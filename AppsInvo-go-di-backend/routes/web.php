<?php



Route::get('/', function(){
		return view('login');
	})->name('login');


  
Route::group(['middleware' => 'auth'], function(){
	Route::get('/logout', [
				'as' => 'admin-logout',
				'uses' => 'LoginController@logout'
			]);

Route::match(['get', 'post'], '/dashboard', [
				'as' => 'admin-dashboard',
				'uses' => 'UserController@getdashboard'
			]);

	Route::match(['get', 'post'], '/business_card', [
				'as' => 'admin-business_card',
				'uses' => 'UserController@getAll'
			]);

	
	Route::match(['get', 'post'], '/card_creater', [
				'as' => 'admin-card_creater',
				'uses' => 'UserController@card_creater'
			]);



	Route::get('/change-password', function () {
			return view('change-password');
		})->name('admin-change-password-view');
		
	Route::post('/change-password', [
			'as' => 'admin-change-password',
			'uses' => 'LoginController@changePassword'
		]);



Route::match(['get', 'post'], '/users', [
				'as' => 'admin-users',
				'uses' => 'UserController@getusers'
			]);


Route::post('/add-users', [
				'as' => 'admin-add-users',
				'uses' => 'UserController@addusers'
			]);
Route::post('/edit-users', [
				'as' => 'admin-edit-users',
				'uses' => 'UserController@editusers'
			]);
Route::get('/del-user/{userId?}', [
        'as' => 'admin-del-user',
        'uses' => 'UserController@delUser'
      ]);
      
  Route::get('/active-user/{id?}', [
        'as' => 'admin-active-user',
        'uses' => 'UserController@activeUser'
      ]);
      
  Route::get('/inactive-user/{id?}', [
        'as' => 'admin-inactive-user',
        'uses' => 'UserController@inactiveUser'
      ]);


		Route::match(['get', 'post'], '/categories', [
				'as' => 'admin-categories',
				'uses' => 'CategoryController@getAll'
			]);

	Route::get('/category-export-excel/', [
				'as' => 'admin-category-export-excel',
				'uses' => 'CategoryController@exportToExcel'
			]);
				Route::post('/edit-category', [
				'as' => 'admin-edit-category',
				'uses' => 'CategoryController@editCategory'
			]);
	Route::get('/active-category/{id?}', [
				'as' => 'admin-active-category',
				'uses' => 'CategoryController@activeCategory'
			]);

	Route::get('/inactive-category/{id?}', [
				'as' => 'admin-inactive-category',
				'uses' => 'CategoryController@inactiveCategory'
			]);

	Route::get('/del-category/{id?}', [
				'as' => 'admin-del-category',
				'uses' => 'CategoryController@delCategory'
			]);

	Route::post('/add-category', [
				'as' => 'admin-add-category',
				'uses' => 'CategoryController@addCategory'
			]);

Route::get('/del-temp/{id?}', [
				'as' => 'admin-del-temp',
				'uses' => 'UserController@deltemp'
			]);
	

});

Route::group(['middleware' => 'guest'], function(){
	Route::get('/login', function(){
		return view('login');
	})->name('login');

	Route::post('/login', [
				'as' => 'admin-login',
				'uses' => 'LoginController@authenticate'
			]);

	Route::post('/forgot', [
				'as' => 'admin-send-forgot-mail',
				'uses' => 'LoginController@forgot'
			]);
});



Route::get('/check_device/{user_id}/{card_id}', 'Api\card@check_device');  
//Route::get('/user/{id}', 'Api\ProfileController@getDetailsWeb'); 

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