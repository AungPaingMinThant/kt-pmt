<?php

namespace App\Http\Controllers\Digital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DebitCardController extends Controller
{
    public function index()
    {
        return view('debit-card.index');
    }
}
