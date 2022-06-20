<?php

use App\Http\Controllers\Register_Controller;
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
Route::get('/auth', [Register_Controller::class, 'index'])->name('auth');
Route::post('/auth', [Register_Controller::class, 'login'])->name('login');
Route::post('/register', [Register_Controller::class, 'registered']);
// Route::get('/auth', function () {
//     return view('authPage/auth');
// });

Route::get('/', function () {
    return view('adminpage.dashboard_layout');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['login_check:0']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['login_check:1']], function () {
        Route::resource('editor', AdminController::class);
    });
});