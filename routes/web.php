<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\enduser\HomeController;
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
Route::prefix('e-commerce')->group(function(){

Route::get('/' ,[HomeController::class , 'index'] )->name('main');
Route::get('/products' ,[HomeController::class , 'products'] )->name('products');
Route::get('/men' ,[HomeController::class , 'men'] )->name('men');
Route::get('/women'  ,[HomeController::class , 'women'] )->name('women');
Route::get('/footwear' ,[HomeController::class , 'footwear'] )->name('footwear');
Route::get('/accessories' ,[HomeController::class , 'accessories'] )->name('accessories');
Route::get('/search' ,[HomeController::class , 'search'] )->name('search');
Route::get('/signup' ,[HomeController::class , 'register'] )->name('signup');
Route::post('/store' , [HomeController::class , 'store'] )->name('home.store');
Route::get('/signin' ,[HomeController::class , 'login'] )->name('signin');
Route::get('/profile' ,[HomeController::class , 'profile'] )->name('profile');
Route::get('/contactus' ,[HomeController::class , 'contact'] )->name('contact');
Route::get('/product' ,[HomeController::class , 'singleproduct'] )->name('singleproduct');
Route::get('/ordering' ,[HomeController::class , 'ordering'] )->name('ordering');
Route::get('auth/facebook', [HomeController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [HomeController::class, 'facebookSigning'])->name('facebooksigning');
Route::get('cart', [HomeController::class, 'cartList'])->name('cart.list');
Route::post('cart', [HomeController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [HomeController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [HomeController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [HomeController::class, 'clearAllCart'])->name('cart.clear');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified' , 'isAdmin'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
