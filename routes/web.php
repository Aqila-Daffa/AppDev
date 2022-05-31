<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\menuController;
use App\Http\Controllers\AuthCon\RegisterController;
use App\Http\Controllers\AuthCon\LoginController;

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
})->middleware('guest');

// auth route
Route::get('/signin', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::get('/signup', [RegisterController::class, 'index'])->middleware('guest');

// register functionality
Route::post('/register', [RegisterController::class, 'store']);

// login and logout functionality
Route::post('/login', [LoginController::class, 'loginAuth']);
Route::post('/logout', [LoginController::class, 'logout']);


// Client Page
Route::get('/home', function () {
    return view('client/mainpage');
})->middleware('auth');

Route::get('/purchased', function () {
    return view('client/purchasedpage');
})->middleware('auth');

Route::get('/menu', [MenuController::class, 'indexAction'])->middleware('auth');
Route::get('/menudetail', [MenuController::class, 'menuDetail'])->middleware('auth');

Route::get('/menudetail', [MenuController::class, 'menuDetail'])->middleware('auth');

// Admin Page
Route::get('/addmenu', function () {
    return view('admin/addmenu');
});

Route::post('/addmenuitem', [MenuController::class, 'storeMenu']);