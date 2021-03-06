<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

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
Route::get('/', function() {
    return view('home');
})->name('home');

/*게시물*/
/* ->name('참조할 아이디 값이 됨')*/
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

/*로그아웃 */
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');


/*로그인*/
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);


/*등록하기*/
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


/*게시물 작성*/ 
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::post('/posts', [PostController::class, 'store']);

/*좋아여 */
Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
/*싫어 */
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes'); 