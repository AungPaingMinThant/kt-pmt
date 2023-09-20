<?php

namespace App\Http\Controllers\Digital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DigitalSecureController extends Controller
{
    public function index()
    {
        return view('digital-secure.index');
    }

    public function indexMM() {
        return view('digital-secure.mm-index');
    }
}
