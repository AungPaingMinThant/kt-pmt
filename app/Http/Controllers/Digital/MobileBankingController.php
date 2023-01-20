<?php

namespace App\Http\Controllers\Digital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MobileBankingController extends Controller
{
    public function mbindex()
    {
        return view('mobile-banking.index');
    }
}
