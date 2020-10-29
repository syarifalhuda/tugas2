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
    return view('welcome');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/blog-single', function () {
    return view('blog-single');
});Route::get('/blog', function () {
    return view('blog');
});Route::get('/cart', function () {
    return view('cart'); 
});Route::get('/checkout', function () {
    return view('checkout');
});Route::get('/contact', function () {  
    return view('contact');
});Route::get('/contact-us', function () {
    return view('contact-us');
});Route::get('/index', function () {
    return view('index');
});Route::get('/login', function () {
    return view('login');
});Route::get('/shop', function () {
    return view('shop');
});Route::get('/admin', function () {
    return view('admin.admin');
});;Route::get('/checkout2', function () {
    return view('checkout2');
});;;Route::get('/codes2', function () {
    return view('codes2');
});;;Route::get('/mail2', function () {
    return view('mail2');
});;;Route::get('/products2', function () {
    return view('products2');
});;;Route::get('/products12', function () {
    return view('products12');
});