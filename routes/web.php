<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuth;
use App\Http\Controllers\Socialites;


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

 Route::get('/homepage', function () {
     return view('homepage');
 });

Auth::routes();

Route::get('/', [CustomAuth::class, 'home'])->name('home');
Route::get('register', [CustomAuth::class, 'register'])->name('register');
Route::post('postlogin', [CustomAuth::class, 'login'])->name('postlogin');
Route::post('signup', [CustomAuth::class, 'signup'])->name('signup');

Route::get('/auth/google', [Socialites::class, 'googleredirect'])->name('google-auth');
Route::get('/auth/google/call-back', [Socialites::class, 'googlecallback']);
Route::get('/auth/facebook', [Socialites::class, 'Fbredirect'])->name('facebook-auth');
Route::get('/auth/facebook/call-back', [Socialites::class, 'Fbcallback']);
;
