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
Route::get('dashboard',function(){
    return view('admin.pages.dashboard');
});
Route::get('tables',function(){
    return view('admin.pages.tables');
});
Route::get('register',function(){
    return view('admin.pages.register');
});
Route::get('login',function(){
    return view('admin.pages.login');
});
Route::get('main',function(){
    return view('website.pages.main');
});
Route::get('about',function(){
    return view('website.pages.about');
});
Route::get('courses',function(){
    return view('website.pages.courses');
});
Route::get('trainers',function(){
    return view('website.pages.trainers');
});
Route::get('contact',function(){
    return view('website.pages.contact');
});
Route::get('events',function(){
    return view('website.pages.events');
});
Route::get('pricing',function(){
    return view('website.pages.pricing');
});