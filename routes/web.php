<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController ;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\SectionsController;
use Illuminate\Support\Facades\Auth;

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
/* Auth::routes(); */
Auth::routes(['register' => false]);
Route::get('/', function () {
    return view('index');
});
Route::resource('invoices',InvoicesController::class);
Route::resource('sections',SectionsController::class);
Route::get('/{page}',[AdminController::class,'index']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
