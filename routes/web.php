<?php

use App\Http\Controllers\muhasebeController;
use App\Http\Controllers\userController;
use Illuminate\Http\Request;
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

@include_once('admin_web.php');

Route::get('/', function () {
    return redirect()->route('welcome');
})->name('/');

Route::get('welcome',[muhasebeController::class,'welcome'])->name('welcome')->middleware('auth');
Route::get('sign-up',[userController::class,'signUp'])->name('sign-up');
Route::post('login',[userController::class,'login'])->name('login');
Route::get('login',[userController::class,'loginpage'])->name('loginPage');
Route::post('register',[userController::class,'register'])->name('register');
Route::post('logout',[userController::class,'logout'])->name('logout');

/*Route::get('sil',[todoController::class,'sil'])->name('sil');
Route::get('update',[todoController::class,'isdoneOrNot'])->name('update');
Route::get('allUpdate',[todoController::class,'update'])->name('allUpdate');
Route::post('add',[todoController::class,'add'])->name('add'); */






Route::prefix('starter-kit')->group(function () {
    Route::view('index', 'admin.color-version.index')->name('index');
});