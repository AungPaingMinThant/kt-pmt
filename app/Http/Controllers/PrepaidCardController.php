<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrepaidCardController extends Controller
{
    public function index()
    {
        return view('prepaid-card.index');
    }
}
