<?php

namespace App\Http\Controllers\Digital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SimplePayController extends Controller
{
    public function index()
    {
        return view('simple-pay.index');
    }
}
