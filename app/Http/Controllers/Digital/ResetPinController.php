<?php

namespace App\Http\Controllers\Digital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResetPinController extends Controller
{
    public function index()
    {
        return view('reset-pin.index');
    }
}
