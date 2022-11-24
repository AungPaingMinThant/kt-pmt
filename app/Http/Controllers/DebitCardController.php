<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DebitCardController extends Controller
{
    public function index()
    {
        return view('debit-card.index');
    }
}
