<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreditCardController extends Controller
{
    public function index()
    {
        return view('credit-card.index');
    }
}
