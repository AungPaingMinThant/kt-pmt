<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResetPinController extends Controller
{
    public function index()
    {
        return view('reset-pin.index');
    }
}
