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

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/cache-clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
//    Artisan::call('composer dump-autoload');
    return "Cache is cleared";
});


Auth::routes();

/*
 * Admin Routes
 */
Route::prefix('admin')->group(function()
{
    // Admin Login
    Route::get('/login', 'AdminUserController@index');
    Route::post('/login', 'AdminUserController@store');

    Route::middleware('auth:admin')->group(function()
    {
        // Dashboard
        Route::get('/', 'DashboardController@index');

        // Products
        Route::resource('/product','ProductController');

        // Orders
//        Route::resource('/orders','OrderController');
//        Route::get('/confirm/{id}','OrderController@confirm')->name('order.confirm');
//        Route::get('/pending/{id}','OrderController@pending')->name('order.pending');

        // Users
//        Route::resource('/users','UsersController');

//         Logout
        Route::get('/logout','AdminUserController@logout');

    });

});
/*
 * Admin Routes Ends
 */





//Route::get('/', function (){
//    return view('home');
//})->name('index');


Route::get('/', 'HomeController@index')->name('index');

Route::get('contact-us', function (){
    return view('pages.contact');
})->name('contactUs');

Route::get('about-us', function (){
    return view('pages.about');
})->name('aboutUs');

Route::resource('products','ProductsController');
