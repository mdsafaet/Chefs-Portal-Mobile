<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetRosterController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/roster', function () {
    return view('roster');
});


Route::get('/hours_controls', [SetRosterController::class, 'showPage'])->name('hours_controls');

Route::get('/prep-list', function () {
    return view('prep-list');
});