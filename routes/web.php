<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
// use App\Http\Controllers\RequestController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
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
Route::get('/', 'App\Http\Controllers\HomeController@home');
Route::get('/register', 'App\Http\Controllers\RegistrationController@create');
Route::post('/register', 'App\Http\Controllers\RegistrationController@store')->name('registration.store');
// Route::get('/users', 'App\Http\Controllers\RegistrationController@index');

Route::get('/login', 'App\Http\Controllers\SessionsController@create')->name('login');
Route::post('/login', 'App\Http\Controllers\SessionsController@store');
Route::get('/logout', 'App\Http\Controllers\SessionsController@destroy')->name('logout');
Route::resource('/departments', DepartmentController::class);
Route::get('/admin', 'App\Http\Controllers\HomeController@dashboard')->name('dashboard')->middleware('auth');
Route::resource('/services', ServiceController::class);
Route::resource('/users', UserController::class);
// Route::post('follow', 'HomeController@follwUserRequest')->name('follow');

Route::get('/document/{id}', [ServiceController::class, 'genMission'])->name('generate');

Route::get('/getDocument/{id}', [ServiceController::class, 'createPDF'])->name('download');

Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.add');
Route::post('/reply/store', [CommentController::class, 'replystore'])->name('reply.add');
Route::delete('/comment/delete/{id}', [CommentController::class, 'destroy'])->name('comment.destroy');