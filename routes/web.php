<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutStrController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\DomainsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PreProjectsController;
use App\Http\Controllers\SlyderController;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\UnderProjectsController;
use App\Http\Controllers\CatdetController;

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

Route::get('/admin', function () {
	return view('welcome');
});
Auth::routes();
Route::get('/', function () {
    return view('home.index');
});
Route::resource('countries', CountryController::class);
Route::resource('about', AboutController::class);
Route::resource('about_str', AboutStrController::class);
Route::resource('details',DetailsController::class);
Route::resource('media', MediaController::class);
Route::resource('catdets', CatdetController::class);

Route::resource('activities', ActivitiesController::class);
Route::resource('domains', DomainsController::class);
Route::resource('contact', ContactsController::class);
Route::get('/', 'App\Http\Controllers\FrontController@front');
  
Route::resource('pre_project', PreProjectsController::class);
Route::resource('under_project',UnderProjectsController::class);

 Route::resource('slider', SlyderController::class);
 Route::resource('statistics',StatisticsController::class);
 Route::resource('teams',TeamsController::class);


// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', 'App\Http\Controllers\HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::resource('users', UserController::class);
Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});
