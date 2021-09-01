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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/mainpage', function () {
    return view('indexafterlogin');
});

Route::get('/detail-img', function () {
    return view('detailimg');
});

Route::get('/profile', function() {
    return view('profile');
});

Route::get('/edit-profile', function() {
    return view('editprofile');
});

Route::get('/about-profile', function() {
    return view('aboutprofile');
});

Route::get('/pertanyaan-profile', function() {
    return view('tanya');
});
Route::get('/chat', function() {
    return view('chat');
});
Route::get('/modal', function() {
    return view('modal');
});
Route::get('/Q&A', function() {
    return view('Q&A');
});
Route::get('/member', function() {
    return view('member');
});
Route::get('/post', function() {
    return view('post');
});