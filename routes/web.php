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

Route::get('/add-staff', function () {
    return view('add_staff');
});
Route::get('/suppliers/home', function () {
    return view('supplier_home');
});

// Safaet
Route::get('/view-roster', function () {
    return view('ViewRoster');
});
Route::get('/manage-team', function () {
    return view('ManageTeam');
});
Route::get('/staff-attendance', function () {
    return view('Staff-Attendance');
});

Route::get('/pantry-list', function () {
    return view('PantryList');
});

//safaet




//fardin
Route::view('/dashboard', 'pages.dashboard');
//fardin


