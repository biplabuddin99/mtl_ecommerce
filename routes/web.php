<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\EcomHelpController;
use App\Http\Controllers\EcomPartnerController;

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
Route::resource('partner',EcomPartnerController::class);

// Route::get('/', function () {
//     return view('backend.dashboard');
// });
