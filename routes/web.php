<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SQLUploadsController;



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

Route::get('/', [HomeController::class, 'index']);
Route::resource('/', 'HomeController');



Route::get('/search', [HomeController::class, 'search']);
Route::get('/view', [HomeController::class, 'show']);

Route::get('/test', function () {
    return view('test');
});


Route::post('/upload-sql', [SQLUploadsController::class, 'upload'])->name('upload.sql');

//Auth::routes();
