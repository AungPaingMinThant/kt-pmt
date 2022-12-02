<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DigitalSecureController extends Controller
{
    public function index()
    {
        return view('digital-secure.index');
    }
}
