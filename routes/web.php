<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\MadingController;
use App\http\Controllers\LoginController;
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








// Route::get('/edit-profile', function() {
//     return view('editprofile');
// });

// Route::get('/about-profile', function() {
//     return view('aboutprofile');
// });

// Route::get('/pertanyaan-profile', function() {
//     return view('tanya');
// });
// Route::get('/', function() {
//     return view('chat');
// });
// Route::get('/modal', function() {
//     return view('modal');
// });
// Route::get('/Q&A', function() {
//     return view('Q&A');
// });
// Route::get('/member', function() {
//     return view('member');
// });
// Route::get('/addpost', function() {
//     return view('addpost');
// });

// Route::get('/modal-raymond', function() {
//     return view('modal-raymond');
// });

// Route::get('/modal-raymond', function() {
//     return view('modal-raymond');
// });

Route::get('/post', [MadingController::class, 'post']);

Route::get('/', [MadingController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);


Route::get('/mainpage', [MadingController::class, 'mainpage']);


Route::get('/detailprofile',[MadingController::class, 'detailprofile']); 

Route::get('/profile', [MadingController::class, 'profile']);

Route::get('/edit-profile', [MadingController::class, 'edit_profile']);

Route::get('/about-profile', [MadingController::class, 'about_profile']);

Route::get('/pertanyaan-profile', [MadingController::class, 'pertanyaan_profile']);

Route::get('/modal', [MadingController::class, 'modal']);

Route::post('/Q&A', [MadingController::class, 'store']);

Route::get('/Q&A', [MadingController::class, 'QandA']);

Route::get('/member', [MadingController::class, 'member']);

Route::get('/post', [MadingController::class, 'post']);

Route::get('/addpost', [MadingController::class, 'addpost']);

Route::get('/karya', [MadingController::class, 'karya']);

Route::get('/chat', [MadingController::class, 'chat']);

Route::get('/loginupdate', function() {
    return view('login.login');
});

// Route::post('/login', [LoginController::class, 'authenticate']);