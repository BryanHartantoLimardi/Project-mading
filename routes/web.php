<?php

use Facade\FlareClient\View;
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
    return view('home.index');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/mainpage', function () {
    return view('home.indexafterlogin');
});

Route::get('/detail-img', function () {
    return view('home.detailimg');
});

Route::get('/profile', function() {
    return view('profile.profile');
});

Route::get('/edit-profile', function() {
    return view('profile.editprofile');
});

Route::get('/about-profile', function() {
    return view('profile.aboutprofile');
});

Route::get('/pertanyaan-profile', function() {
    return view('profile.tanya');
});
Route::get('/chat', function() {
    return view('popup.chat');
});
Route::get('/modal', function() {
    return view('popup.modal');
});
Route::get('/Q&A', function() {
    return view('popup.Q&A');
});
Route::get('/member', function() {
    return view('popup.member');
});
Route::get('/post', function() {
    return view('popup.post');
});

Route::get('/loginupdate', function() {
    return view('login.login');
});