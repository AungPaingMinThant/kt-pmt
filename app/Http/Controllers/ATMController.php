<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ATMController extends Controller
{
    public function index()
    {
        return view('atm.index');
    }
}
