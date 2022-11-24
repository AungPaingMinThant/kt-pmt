<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternetBankingController extends Controller
{
    public function index()
    {
        return view('internet-banking.index');
    }
}
