<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\UserController::class, 'show']);
Route::get('/create-from', [App\Http\Controllers\UserController::class, 'createForm']);

Route::post('/user-store', [App\Http\Controllers\UserController::class, 'Store']);
Route::get('/view', [App\Http\Controllers\UserController::class, 'viewUser']);

Route::get('/user-delete/{id}', [App\Http\Controllers\UserController::class, 'delete']);
Route::get('/user-edit/{id}', [App\Http\Controllers\UserController::class, 'userEdit']);
Route::post('/user-update/{id}', [App\Http\Controllers\UserController::class, 'userUpdate']);




Route::get('/index', [App\Http\Controllers\FrontController::class, 'frontPage']);


Route::get('/slider-form', [App\Http\Controllers\SliderController::class, 'sliderForm']);
Route::post('/slider-store', [App\Http\Controllers\SliderController::class, 'sliderStore']);
Route::get('/slider-table', [App\Http\Controllers\SliderController::class, 'viewSlider']);
Route::get('/slider-delete/{id}', [App\Http\Controllers\SliderController::class, 'deleteSlider']);
Route::get('/slider-edit/{id}', [App\Http\Controllers\SliderController::class, 'editSlider']);
Route::post('/slider-update/{id}', [App\Http\Controllers\SliderController::class, 'updateSlider']);



Route::get('/about-form', [App\Http\Controllers\AboutController::class, 'aboutForm']);
Route::post('/about-store', [App\Http\Controllers\AboutController::class, 'aboutStore']);
Route::get('/about-table', [App\Http\Controllers\AboutController::class, 'viewAbout']);
Route::get('/about-delete/{id}', [App\Http\Controllers\AboutController::class, 'deleteAbout']);
Route::get('/about-edit/{id}', [App\Http\Controllers\AboutController::class, 'editAbout']);
Route::post('/about-update/{id}', [App\Http\Controllers\AboutController::class, 'updateAbout']);



Route::get('/files-form', [App\Http\Controllers\FilesController::class, 'filesForm']);
Route::post('/files-store', [App\Http\Controllers\FilesController::class, 'filesStore']);
Route::get('/files-table', [App\Http\Controllers\FilesController::class, 'viewFiles']);
Route::get('/files-delete/{id}', [App\Http\Controllers\FilesController::class, 'deleteFiles']);
Route::get('/files-edit/{id}', [App\Http\Controllers\FilesController::class, 'editFiles']);
Route::post('/files-update/{id}', [App\Http\Controllers\FilesController::class, 'updateFiles']);



Route::get('/card-form', [App\Http\Controllers\CardController::class, 'cardForm']);
Route::post('/card-store', [App\Http\Controllers\CardController::class, 'cardStore']);
Route::get('/card-table', [App\Http\Controllers\CardController::class, 'viewCards']);
Route::get('/card-delete/{id}', [App\Http\Controllers\CardController::class, 'deleteCards']);
Route::get('/card-edit/{id}', [App\Http\Controllers\CardController::class, 'editCards']);
Route::post('/card-update/{id}', [App\Http\Controllers\CardController::class, 'updateCards']);


Route::get('/product', [App\Http\Controllers\ProductController::class, 'productCart']);
Route::get('/add-to-cart/{id}', [App\Http\Controllers\ProductController::class, 'addToCart']);
Route::post('/cart-delete/', [App\Http\Controllers\ProductController::class, 'deleteCart'])->name('cart.remove');
Route::get('/viewCart', [App\Http\Controllers\ProductController::class, 'view']);
Route::get('/incCart/{id}', [App\Http\Controllers\ProductController::class, 'increaseByOne'])->name('increase');
Route::get('/decCart/{id}', [App\Http\Controllers\ProductController::class, 'decreaseByOne'])->name('decrease');

Route::get('/checkout-page', [App\Http\Controllers\ProductController::class, 'checkOut'])->name('decrease');
Route::post('/checkout', [App\Http\Controllers\ProductController::class, 'postCheckout'])->name('checkout')->middleware('auth');





















