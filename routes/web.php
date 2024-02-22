<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UserProfileController;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/hello', function () {
 return 'Hello World';
});*/

Route::get('/world', function () {
    return 'World';
   });   

Route::get('/welcome', function () {
    return 'Selamat datang!';
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

/*Route::get('/user/profile', function () {
    //
   })->name('profile');

Route::get(
    '/user/profile',
    [UserProfileController::class, 'show']
)->name('profile');

// Generating URLs...
$url = route('profile');

// Generating Redirects...
return redirect()->route('profile');*/

Route::get('/hello', [WelcomeController::class, 'hello']);
Route::get('/index', [PageController::class, 'index']);
Route::get('/articles', [PageController::class, 'articles']);
Route::get('/about', [PageController::class, 'about']);