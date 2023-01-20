<?php

namespace App\Http\Controllers\Digital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InternetBankingController extends Controller
{
    public function index()
    {
        return view('internet-banking.index');
    }
}
