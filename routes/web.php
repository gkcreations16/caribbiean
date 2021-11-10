<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

//admin///////////////////////////////////////////////////////
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('profile', 'DashboardController@displyprofile')->name('profile');
    //Route::get('privacysetting', 'DashboardController@displypassword')->name('privacysetting');

    Route::put('profile', 'DashboardController@updateprofile')->name('profile.update');
    Route::put('profile/password', 'DashboardController@changePassword')->name('profile.password');
    ///pages
    Route::resource('page', 'HomePageController')->except(['create', 'show', 'edit']);

    Route::resource('user', 'UserController')->except(['create', 'show', 'edit', 'store']);
    Route::resource('category', 'CategoryController')->except(['create', 'show', 'edit']);
    Route::resource('subcategory', 'SubCategoryController')->except(['create', 'show', 'edit']);
    Route::resource('addpost', 'PostController')->except(['create', 'show', 'edit']);
    Route::get('GetSubCatAgainstMainCat/{id}', 'PostController@GetSubCatAgainstMainCat');
    // Route::resource('listings', 'ListingController')->except(['create', 'show', 'edit']);
});

//user///////////////////////////////////////////////////////
Route::group(['prefix' => 'user', 'as' => 'user.', 'namespace' => 'User', 'middleware' => ['auth', 'user']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
