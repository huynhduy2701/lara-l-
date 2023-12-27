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
Route::get('new', function () {
    return view('news');
});
Route::get('/child', function () {
    return view('child');
});Route::get('/pro', function () {
    return view('product');
});
Route::get('/user', function () {
    return view('user');
});
Route::post('/user', function () {
    return view('user');
});
Route::prefix('sanpham')->group(function(){
  
    Route::get('/them/{id}', function ($id) {
        return 'them id : '.$id;
    })->name('add');
    Route::get('/sua/{id}', function ($id) {
        return 'sua id : '.$id;
    })->name('edit');
    Route::get('/xoa/{id}', function ($id) {
        return 'delete id : '.$id;
    })->name('delete');
   
});





