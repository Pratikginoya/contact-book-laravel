<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
// For View the message page only
Route::get('/register_now', function(){
    return view('register_now');
});
Route::get('/password_error', function(){
    return view('password_error');
});
Route::get('/register_sucess', function(){
    return view('register_sucess');
});
Route::get('/change_pass', function(){
    return view('change_pass',['msg'=>'','msg2'=>'']);
})->middleware('login_check');


Route::any('/',[UserController::class,'index']);
Route::any('/register',[UserController::class,'register']);
Route::any('/home',[UserController::class,'home'])->middleware('login_check');
Route::any('/add_contact',[UserController::class,'add_contact'])->middleware('login_check');
Route::any('/view_contact',[UserController::class,'view_contact'])->middleware('login_check');
Route::any('/view_contact/{id}',[UserController::class,'delete_contact'])->middleware('login_check');
Route::any('/edit_contact/{id}',[UserController::class,'update'])->middleware('login_check');
Route::post('/edit_contact/{id}',[UserController::class,'update_submit'])->middleware('login_check');
Route::any('/manage_acc',[UserController::class,'manage_acc'])->middleware('login_check');
Route::any('/edit',[UserController::class,'edit_user'])->middleware('login_check');
Route::post('/edit',[UserController::class,'update_user_details'])->middleware('login_check');
Route::post('/change_pass',[UserController::class,'change_password'])->middleware('login_check');
Route::post('/view_contact',[UserController::class,'delete_checked'])->middleware('login_check');
Route::any('/logout',[UserController::class,'logout']);


