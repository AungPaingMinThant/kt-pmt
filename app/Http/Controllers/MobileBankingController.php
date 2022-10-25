<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobileBankingController extends Controller
{
    public function mbindex()
    {
        return view('mobile-banking.index');
    }
}
