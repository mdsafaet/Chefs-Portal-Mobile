<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetRosterController extends Controller
{
    public function showPage()
    {
        return view('hours_controls');  // This will load the view called 'newpage.blade.php'
    }
}
