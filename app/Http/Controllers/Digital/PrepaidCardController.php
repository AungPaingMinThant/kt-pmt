<?php

namespace App\Http\Controllers\Digital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrepaidCardController extends Controller
{
    public function index()
    {
        return view('prepaid-card.index');
    }
}
