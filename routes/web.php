<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Database\Seeders\ProductsSeeder;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function(){
Route::get('/produse', 'ProductController@index'); //afisare lista sarcini pe pagina de start
Route::resource('products', 'ProductController');// Ruta de resurse va genera CRUDURI
Route::get ('products/{id}','ProductController@show');
Route::delete('/products/delete/{id}', 'ProductController@destroy')->name('products.delete');
Route::get('/clients', 'ClientController@index'); //afisare lista sarcini pe pagina destart
Route::resource('clients', 'ClientController');// Ruta de resurse va genera CRUDURI
Route::delete('/clients/delete/{id}', 'ClientController@destroy')->name('clients.delete');
Route::get('/', 'uProductsController@index'); //afisare pagina de start
Route::get('cart', 'uProductsController@cart'); //cos
Route::get('add-to-cart/{id}', 'uProductsController@addToCart');//adaug incos
Route::patch('update-cart', 'uProductsController@update'); //modific cos
Route::delete('remove-from-cart', 'uProductsController@remove');//sterg din cos*/
});
