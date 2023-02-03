<?php

namespace App\Http\Controllers\AccountSaving;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FixedDepositController extends Controller
{
    public function index()
    {
        return view('account-saving.fixed-deposit');
    }
}
