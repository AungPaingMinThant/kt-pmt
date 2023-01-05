<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorporateInternetBankingController extends Controller
{
    public function index()
    {
        return view('corporate-internet-banking.index');
    }
}
