<?php

namespace App\Http\Controllers\Digital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreditCardController extends Controller
{
    public function index()
    {
        return view('credit-card.index');
    }
}
