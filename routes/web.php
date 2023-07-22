<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\FeatureController;
use App\http\Controllers\HomeController;
use App\http\Controllers\contactusController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Routes;
use Illuminate\Support\Facades\Storage;
use App\User;


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

Route::post('/index', [HomeController::class, 'upload']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [FeatureController::class, 'index']);

//Profile
Route::get('/myprofile/{id}', [FeatureController::class, 'myprofile'])->name('myProfile');
Route::get('/editProfile/{id}', [FeatureController::class, 'editProfile'])->name('editProfile');
Route::post('/updateProfile/{id}', [FeatureController::class, 'updateProfile'])->name('updateProfile');
Route::get('/home/contact', [FeatureController::class, 'contact'])->name('contact');
Route::post('/contactx', [App\Http\Controllers\FeatureController::class, 'storeContact'])->name('storeContact');