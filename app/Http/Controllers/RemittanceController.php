<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RemittanceController extends Controller
{
    public function localIndex()
    {
        return view('remittance.local');
    }

    public function interIndex()
    {
        return view('remittance.inter');
    }

    public function paymentIndex()
    {
        return view('remittance.payment');
    }
}
