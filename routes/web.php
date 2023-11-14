<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Product;
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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/profile',function(){
    $products=Product::where('user_id',auth()->id())->get();
    return view('profile',['products'=>$products]);
})->name('profile');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/products', function () {
    $products=Product::all();
    return view('products',['products'=>$products]);
})->name('products');
Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);
Route::post('/logout',[UserController::class,'logout']);
Route::get('/add', function () {
    return view('add');
})->name('add');
Route::post('/add',[ProductController::class,'add'])->name('add.product');
Route::get('/myprod', function () {
    return view('myprod');
})->name('myprod');
