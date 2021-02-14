<?php

use Illuminate\Support\Facades\Route;
use App\Responses\DoctorLoginResponse;

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


Route::group(['prefix'=>'doctor'], function(){
    Route::get('login', [App\Http\Controllers\Doctor\Auth\LoginController::class, 'create'])->name('doctor.login');
    Route::post('login', [App\Http\Controllers\Doctor\Auth\LoginController::class, 'store']);
    Route::get('register', [App\Http\Controllers\Doctor\Auth\RegisteredDoctorController::class, 'create'])->name('doctor.register');
    Route::post('register', [App\Http\Controllers\Doctor\Auth\RegisteredDoctorController::class, 'store']);
});

Route::get("/doctor/doctor", [App\Http\Controllers\DoctorController::class, 'index'])->name('doctor.index');
    
Route::group(['prefix'=>'doctor', 'middleware'=>'auth:doctor'], function(){
    Route::get('logout', [App\Http\Controllers\Doctor\Auth\AuthenticatedSessionController::class, 'destroy'])->name('doctor.logout');
    Route::get('article', [App\Http\Controllers\ArticleController::class, 'create'])->name('doctor.article.create');
    Route::post('article', [App\Http\Controllers\ArticleController::class, 'store']);
    Route::resource('/doctor', 'App\Http\Controllers\DoctorController', ['only' => ['create', 'show', 'update', 'destroy', 'edit']]);
});


require __DIR__.'/auth.php';