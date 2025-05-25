<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/add-staff', function () {
    return view('add_staff');
});
Route::get('/suppliers/home', function () {
    return view('supplier_home');
});
Route::get('/admin/home', function () {
    return view('admin-home');
});


