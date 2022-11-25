<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
//use App\Http\Controllers\BackendController;
use App\Http\Controllers\EcomHelpController;
use App\Http\Controllers\EcomPartnerController;
use App\Http\Controllers\EcomSliderController;
use App\Http\Controllers\EcomPageController;
use App\Http\Controllers\EcomAddController;


use App\Http\Controllers\AuthenticationController as auth;


/* Middleware */
use App\Http\Middleware\isAdmin;
use App\Http\Middleware\isOwner;

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
Route::resource('frontend',FrontendController::class);
//Route::resource('backend',BackendController::class);






Route::get('/register', [auth::class,'signUpForm'])->name('register');
Route::post('/register', [auth::class,'signUpStore'])->name('register.store');
Route::get('/', [auth::class,'signInForm'])->name('signIn');
Route::get('/login', [auth::class,'signInForm'])->name('login');
Route::post('/login', [auth::class,'signInCheck'])->name('login.check');
Route::get('/logout', [auth::class,'singOut'])->name('logOut');

Route::group(['middleware'=>isAdmin::class],function(){
    Route::prefix('admin')->group(function(){
        Route::get('dashboard', function () {
            return view('backend.dashboard');
        })->name('admin.dashboard');

        
        Route::resource('ecom_help',EcomHelpController::class);
        Route::resource('ecomSlider',EcomSliderController::class);
        Route::resource('partner',EcomPartnerController::class);
        Route::resource('ecom_page',EcomPageController::class);
        Route::resource('ecomAdd',EcomAddController::class);

    });
});

Route::group(['middleware'=>isOwner::class],function(){
    Route::prefix('owner')->group(function(){
        Route::get('dashboard', function () {
            return view('backend.dashboard');
        })->name('owner.dashboard');
        
    });
});

// Route::get('/', function () {
//     return view('backend.dashboard');
// });
