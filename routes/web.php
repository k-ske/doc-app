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
    return view('user/index');
});

Route::get('/logout', function(){
    Auth::logout();
    return redirect('/user/index');
});

Route::get('/login', function(){
    return view('login');
});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/

Route::group(['middleware' => ['auth']], function(){
    Route::resource('/user', 'App\Http\Controllers\UserController', ['only' => ['create', 'show', 'update', 'destroy', 'edit']]);
    Route::resource('/sport', 'App\Http\Controllers\SportController');
    Route::resource('/injury', 'App\Http\Controllers\InjuryController');
});
require __DIR__.'/auth.php';
