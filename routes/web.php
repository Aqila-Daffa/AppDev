<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\menuController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AuthCon\LoginController;
use App\Http\Controllers\AuthCon\RegisterController;

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

// ***** Landing Page *****

Route::get('/', function () {
    return view('index');
})->middleware('guest');

// *************************


// ***** Authentication Function *****

// auth route
Route::get('/signin', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/signup', [RegisterController::class, 'index'])->middleware('guest');

// register functionality
Route::post('/register', [RegisterController::class, 'store']);

// login and logout functionality
Route::post('/login', [LoginController::class, 'loginAuth']);
Route::post('/logout', [LoginController::class, 'logout']);

// ****************************************


// ***** Client Page *****

Route::get('/home', function () {
    return view('client/mainpage');
})->middleware('auth');

// Profile Feature
Route::get('/profile', [ClientController::class, 'index'])->middleware('auth');
Route::get('/updateprofilepage', [ClientController::class, 'indexUpdate'])->middleware('auth');
Route::post('/updateprofile', [ClientController::class, 'update'])->middleware('auth');

// menu feature
Route::get('/menu', [MenuController::class, 'indexAction'])->middleware('auth');
Route::get('/menudetail', [MenuController::class, 'menuDetail'])->middleware('auth');

// payment feature
Route::get('/cart', [PaymentController::class, 'indexCart'])->middleware('auth');
Route::post('/addcart', [PaymentController::class, 'addCart'])->middleware('auth');
Route::post('/editcart', [PaymentController::class, 'updateQuantity'])->middleware('auth');
Route::post('/deletecart', [PaymentController::class, 'deleteCart'])->middleware('auth');
Route::post('/payment', [PaymentController::class, 'payment'])->middleware('auth');
Route::get('/purchased', [PaymentController::class, 'indexPurchased'])->middleware('auth');

Route::get('checkout','App\Http\Controllers\PaymentController@checkout');
Route::post('checkout','App\Http\Controllers\PaymentController@afterpayment')->name('client.checkout');
// ******************************


// ***** Admin Page *****

Route::get('/addmenu', function () {
    return view('admin/menu/addmenu');
})->middleware('admin');

Route::post('/addmenuitem', [MenuController::class, 'storeMenu'])->middleware('admin');
Route::get('/deletemenu', [MenuController::class, 'deleteMenuPage'])->middleware('admin');
Route::post('/deletemenuitem', [MenuController::class, 'deleteMenu'])->middleware('admin');

Route::get('/admin', function () {
    return view('admin/adminPage');
})->middleware('admin');

Route::get('/adminmenu', [AdminController::class, 'adminMenuIndex'])->middleware('admin');

Route::get('/adminpayment', [AdminController::class, 'paymentIndex'])->middleware('admin');

Route::get('/adminuser', [AdminController::class, 'adminUserIndex'])->middleware('admin');
Route::get('/chooseuser', [AdminController::class, 'chooseUser'])->middleware('admin');
Route::post('/adminedituserpage', [AdminController::class, 'editUserPage'])->middleware('admin');
Route::post('/editprofile', [AdminController::class, 'editUser'])->middleware('admin');
Route::get('/deleteuser', [AdminController::class, 'deleteUserPage'])->middleware('admin');
Route::post('/deleteuseritem', [AdminController::class, 'deleteUser'])->middleware('admin');

// ******************************