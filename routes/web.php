<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\EcomHelpController;
use App\Http\Controllers\EcomPartnerController;
use App\Http\Controllers\EcomSliderController;
use App\Http\Controllers\EcomPageController;
use App\Http\Controllers\EcomAddController;

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
Route::resource('backend',BackendController::class);
Route::resource('ecom_help',EcomHelpController::class);
Route::resource('ecomSlider',EcomSliderController::class);
Route::resource('partner',EcomPartnerController::class);
Route::resource('ecom_page',EcomPageController::class);
Route::resource('ecomAdd',EcomAddController::class);

// Route::get('/', function () {
//     return view('backend.dashboard');
// });
