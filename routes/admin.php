<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\Dashboardcontroller as AdminDashboardcontroller;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\Usercontroller as AdminUsercontroller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
//admin routes
Route::middleware('auth' , 'isAdmin')->prefix('admin')->group(function(){

    
Route::get('/dashboard' ,[AdminDashboardcontroller::class , 'index'])->name('dashboard');
Route::resource('/user' , AdminUsercontroller::class );
Route::resource('/products' , ProductController::class);
Route::resource('/categorie' , CategoryController::class);

});
