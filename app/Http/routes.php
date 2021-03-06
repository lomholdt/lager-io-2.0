<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('/storage', 'StorageController');
Route::resource('/', 'PageController');
Route::get('/profile', 'ProfileController@index');


Route::resource('storage/{storageName}/inventory', 'InventoryController');

Route::get('/home', [
	'as' => '/', function () {
    	return view('home');
}]);

Route::get('/test', function () {
    // return App\Storage::where('is_open', false)->with('company')->get();
	// $storage = App\Storage::find(1);
	// return $storage->company->name;
	return Auth::user()->company_id;
});






// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');