<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PremiumBankingController extends Controller
{
    public function index()
    {
        return view('premium-banking.index');
    }
}
