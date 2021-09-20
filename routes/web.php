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

Route::get('/post', [MadingController::class, 'post']);
    
Route::get('/', [MadingController::class, 'index']);

Route::get('/login', function () {
    return view('login.login');
});

Route::post('/mainpage', [MadingController::class, 'store']);

Route::get('/mainpage', [MadingController::class, 'mainpage']);


Route::get('/detailprofile', function () {
    return view('home.detailprofile.index');
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

Route::get('/coba', function() {
    return view('popup.coba');
});
Route::get('/karya', function() {
    return view('popup.karya');
});

Route::get('/chat', function() {
    return view('popup.chat');
});

Route::get('/loginupdate', function() {
    return view('login.login');
});

Route::post('/login', [LoginController::class, 'authenticate']);