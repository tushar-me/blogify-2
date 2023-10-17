<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'homePage'])->name('home.page');



/*
|--------------------------------------------------------------------------
| User Page Route
|--------------------------------------------------------------------------
*/
// Route::get('/login', [UserController::class, 'userLogin'])->name('user.login');
// Route::get('/registration', [UserController::class, 'userRegister'])->name('user.register');
// Route::get('/profile', [UserController::class, 'userProfile'])->name('user.profile');

Route::get('/login', [UserController::class, 'userLogin'])->name('user.login')->middleware('guest');
Route::post('/login/user', [UserController::class, 'user_auth_login']);
Route::get('/registration', [UserController::class, 'userRegister'])->name('user.register')->middleware('guest');
Route::post('/registration/user', [UserController::class, 'create_user']);
Route::get('/profile', [UserController::class, 'userProfile'])->name('user.profile')->middleware('auth');


/*
|--------------------------------------------------------------------------
| Post Page Route
|--------------------------------------------------------------------------
*/
Route::get('/create',[PostController::class, 'create'])->name('create.post');
Route::get('/edit/{id}',[PostController::class, 'edit'])->name('edit.post');
Route::get('/all-post',[PostController::class, 'allPost'])->name('all.post');
Route::get('/posts/{id}',[PostController::class, 'singlePost'])->name('single.post');


Route::post('/store', [PostController::class, 'store'])->name('store.post');
Route::post('/update/{id}', [PostController::class, 'update'])->name('update.post');

Route::get('/delete/{id}', [PostController::class, 'destroy'])->name('delete.post');


/*
|--------------------------------------------------------------------------
| Comment
|--------------------------------------------------------------------------
*/
Route::post('/comment', [PostController::class, 'commentStore'])->name('comment.store');


/*
|--------------------------------------------------------------------------
| Like
|--------------------------------------------------------------------------
*/
Route::post('/like',[PostController::class, 'like'])->middleware('auth');

/*
|--------------------------------------------------------------------------
| About & Contact Page Route
|--------------------------------------------------------------------------
*/
Route::get('/about', [HomeController::class, 'aboutPage'])->name('about.page');
Route::get('/contact', [HomeController::class, 'contactPage'])->name('contact.page');