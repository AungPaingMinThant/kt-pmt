<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrequentlyUsedDigitalController extends Controller
{
    public function index()
    {
        return view('frequently.index');
    }
}
