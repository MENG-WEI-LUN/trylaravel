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
use App\Http\Controllers\pageController;

// Route::get('/', [pageController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home/{id?}',[pageController::class, 'tryin'] )->name('showImg');
// Route::get('', 'UserController@index')->name('user');

//
//ggg
