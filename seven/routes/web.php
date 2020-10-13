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

Route::get('/', function () {
     return view('welcome');
});

 
 
// Route::get('/user', function(){
//     echo 22222;
// });
// Route::get('/user', [UserController::class, 'index']);
// Route::get('/user', 'UserController@index');
Route::get('/user', 'App\Http\Controllers\UserController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
