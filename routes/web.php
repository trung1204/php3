<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ThongtinController;

Route::get('/', function(){
    echo 'trang chủ';
});

Route::get('test', function(){
    echo 'abc';
});

Route:: get('list-product', [ProductController::class, 'showProduct']); 

Route:: get('list-product/{id}/{name}', [ProductController::class, 'getProduct']); 
Route::get('/thongtinsv', [ThongtinController::class, 'showThongTin']);