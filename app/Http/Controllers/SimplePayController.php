<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimplePayController extends Controller
{
    public function index()
    {
        return view('simple-pay.index');
    }
}
