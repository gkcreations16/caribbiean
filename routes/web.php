<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotManController;
use Laravel\Socialite\Facades\Socialite;



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


/// front pages
Auth::routes();

///social routes
Route::get('login/google', 'Auth\LoginController@redirectToGoogle');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');

Route::get('login/facebook', 'Auth\LoginController@redirectToFACEBOOK');
Route::get('login/facebook/callback', 'Auth\LoginController@handleFACEBOOKCallback');

Route::get('/', 'HomeController@index')->name('home');
Route::get('category', 'HomeController@categorypage')->name('category');
Route::get('navbar2', 'HomeController@navbarfront')->name('navbar2');
Route::get('listing', 'HomeController@listingpage')->name('listing');
Route::get('footer', 'HomeController@footerhome')->name('footer');

Route::post('/massage', 'MassageController@store')->name('massage.store');

// Route::get('bussiness-detail', 'HomeController@bussiness-detail')->name('bussiness-detail');
Route::post('/product/search', 'HomeController@searchProduct');
Route::get('GetAdvanceSerchData/{id}', 'AdvanceSearchController@GetAdvanceSerchData');
Route::get('details/{id}', 'HomeController@postdetails')->name('details');
Route::get('categorydetail/{id}', 'HomeController@categorydetails')->name('categorydetail');
Route::get('categorychooselist/{id}', 'HomeController@categorychooselist')->name('categorychooselist');
Route::match(['get', 'post'], 'botman', [BotManController::class, 'handle']);
/// end front pages

//admin///////////////////////////////////////////////////////
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('profile', 'DashboardController@displyprofile')->name('profile');
    //Route::get('privacysetting', 'DashboardController@displypassword')->name('privacysetting');

    Route::put('profile', 'DashboardController@updateprofile')->name('profile.update');
    Route::put('profile/password', 'DashboardController@changePassword')->name('profile.password');
    ///inner pages
    Route::resource('page', 'HomePageController')->except(['create', 'show', 'edit']);
    Route::resource('user', 'UserController')->except(['create', 'show', 'edit', 'store']);
    Route::resource('category', 'CategoryController')->except(['create', 'show', 'edit']);
    Route::resource('subcategory', 'SubCategoryController')->except(['create', 'show', 'edit']);
    Route::resource('addpost', 'PostController')->except(['create', 'show', 'edit']);
    Route::get('GetSubCatAgainstMainCat/{id}', 'PostController@GetSubCatAgainstMainCat');
    Route::resource('footer', 'FooterController')->except(['create', 'show', 'edit']);
    // Route::resource('listings', 'ListingController')->except(['create', 'show', 'edit']);
    Route::get('/massages', 'MassageController@index')->name('massage.index');
    Route::delete('/massage/{id}', 'MassageController@destroy')->name('massage.destroy');
});

//user///////////////////////////////////////////////////////
Route::group(['prefix' => 'user', 'as' => 'user.', 'namespace' => 'User', 'middleware' => ['auth', 'user']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('profile', 'DashboardController@displyprofile')->name('profile');
    Route::put('profile', 'DashboardController@updateprofile')->name('profile.update');
    Route::put('profile/password', 'DashboardController@changePassword')->name('profile.password');
    Route::resource('addpost', 'PostController')->except(['create', 'show', 'edit']);
    Route::resource('businesspost', 'BusinessaddController')->except(['create', 'show', 'edit']);

    Route::get('GetSubCatAgainstMainCat/{id}', 'PostController@GetSubCatAgainstMainCat');
    //Route::resource('addpost', 'UserPostController')->except(['create', 'show', 'edit']);
});
