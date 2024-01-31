<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'userlogin'])->name('user_login');
Route::get('/register/user', [App\Http\Controllers\UserController::class, 'registeruser'])->name('register_user');
Route::get('/assements', [App\Http\Controllers\AssesementController::class, 'assesement_page'])->name('assesement_index');
Route::post('/store_assesement', [App\Http\Controllers\AssesementController::class, 'storeassesement'])->name('store_assesement');
Route::get('/getassesement_detail', [App\Http\Controllers\AssesementController::class, 'getassesementInfor'])->name('getassesementInfos');
Route::any('/update', [App\Http\Controllers\AssesementController::class, 'updateassesement'])->name('update_assesement');
Route::get('/delete', [App\Http\Controllers\AssesementController::class, 'deleteassesement'])->name('delete_assesement');

Route::get('/admin-logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');