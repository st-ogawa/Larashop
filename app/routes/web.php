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

use App\Http\Controllers\ShopController;
use Illuminate\Routing\Console\MiddlewareMakeCommand;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['middleware' => ['auth']], function () {


    Route::get('/','ShopController@index');

    Route::get('/mycart', 'ShopController@mycart');

    Route::post('products/mycart','ShopController@addMycart');

    Route::post('/cartdelete','ShopController@deleteCart');

    Route::post('/checkout','ShopController@checkout');

    Route::get('/pohistory','ShopController@pohistory');

    Route::get('/search', 'IndexController@index');

    Route::get('products/{id}','ShopController@product');

    Route::match(['get', 'post'], '/botman', 'BotManController@handle');

    Route::get('/botman/tinker', 'BotManController@tinker');

});



Auth::routes();








