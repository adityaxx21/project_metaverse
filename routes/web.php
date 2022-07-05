<?php

use App\Http\Controllers\contactUs_controller;
use App\Http\Controllers\Dashboard_controller;
use App\Http\Controllers\kelolaMetaproperti;
use App\Http\Controllers\MetaLand_Controller;
use App\Http\Controllers\Metaprop_Controller;
use App\Http\Controllers\Register_Controller;
use App\Http\Controllers\shop_controller;
use App\Http\Controllers\userDashboard_controller;
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
Route::get('/login', [Register_Controller::class, 'login_view'])->name('login');
Route::post('/login', [Register_Controller::class, 'login']);
Route::post('/register', [Register_Controller::class, 'registered']);
Route::get('/register', [Register_Controller::class, 'registered_view']);
Route::post('/updateAccountAdmin', [Register_Controller::class, 'updateAccountAdmin']);
Route::post('/updateAccountUser', [Register_Controller::class, 'updateAccountUser']);
Route::post('/delete_account', [Register_Controller::class, 'delete_account']);
Route::get('/getData_auth/{id}', [Register_Controller::class, 'getData']);
Route::get('/kelolaAkun', [Register_Controller::class, 'kelola_akun']);
Route::get('/mailAsk', [Register_Controller::class, 'mailAsk']);
Route::get('/logout', [Register_Controller::class, 'logout']);



Route::get('/contactUs_admin', [contactUs_controller::class, 'admin_side']);
Route::post('/contactUs_delete', [contactUs_controller::class, 'delete_contact_us']);
Route::get('/getData_mail/{id}', [contactUs_controller::class, 'getData']);
Route::post('/answereMail', [contactUs_controller::class, 'answereMail']);
Route::get('/contactUs_print', [contactUs_controller::class, 'contactUs_print']);


// Route::get('/auth', function () {
//     return view('authPage/auth');
// });


Route::get('/adminpage', [Dashboard_controller::class, 'index']);

// Metavers Land Start
Route::get('/kelolaMetaland', [MetaLand_Controller::class, 'index']);
Route::post('/inputMetaland', [MetaLand_Controller::class, 'inputMeta']);
Route::get('/getData/{id}', [MetaLand_Controller::class, 'getData']);
Route::post('/updateMetaland', [MetaLand_Controller::class, 'updateMeta']);
Route::post('/delete_landmark', [MetaLand_Controller::class, 'delete_landmark']);
// Metavers Land End

// Metavers Prop Start
Route::get('/kelolaMetaprop', [Metaprop_Controller::class, 'index']);
Route::post('/inputMetaprop', [Metaprop_Controller::class, 'inputMeta']);
Route::get('/retriveData/{id}', [Metaprop_Controller::class, 'getData']);
Route::post('/updateMetaprop', [Metaprop_Controller::class, 'updateMeta']);
Route::post('/delete_properties', [Metaprop_Controller::class, 'delete_properties']);
// Metavers Prop End


// User Start Here
Route::get('/', [userDashboard_controller::class, 'index'])->name('home');
Route::get('/shop', [shop_controller::class, 'index'])->name('shop');
Route::get('/contactUs', [contactUs_controller::class, 'index'])->name('contactUs');
Route::post('/contactUs', [contactUs_controller::class, 'contactUs_post'])->name('contactUs');
Route::get('/profile',[contactUs_controller::class,'profile'])->name('profile');
Route::get('/faq',[contactUs_controller::class,'faq'])->name('faq');
Route::get('/logout',[Register_Controller::class,'logout']);
// User End Here
