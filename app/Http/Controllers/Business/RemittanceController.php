<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RemittanceController extends Controller
{
    public function localPaymentsIndex()
    {
        return view('business.remittance.local-payments');
    }

    public function internationalPaymentsIndex()
    {
        return view('business.remittance.international-payments');
    }
}
