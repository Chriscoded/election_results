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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'pu_results'])->name('pu_results');

Route::get('/pu_results', [App\Http\Controllers\HomeController::class, 'pu_results'])->name('pu_results');
Route::get('/lga_results', [App\Http\Controllers\HomeController::class, 'lga_results'])->name('lga_results');
Route::get('/lga_result/{id}', [App\Http\Controllers\HomeController::class, 'lga_result'])->name('lga_result');
Route::get('/record_pu_results', [App\Http\Controllers\HomeController::class, 'record_pu_results'])->name('record_pu_results');
Route::post('/store_pu_result', [App\Http\Controllers\HomeController::class, 'store_pu_result'])->name('store_pu_result');

    

// Route::get('/home/service', [App\Http\Controllers\HomeController::class, 'service'])->name('service');
// Route::get('/home/feq', [App\Http\Controllers\HomeController::class, 'feq'])->name('feq');
// Route::get('/home/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

