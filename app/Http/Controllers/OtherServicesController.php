<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtherServicesController extends Controller
{
    public function foreignCurrencyIndex()
    {
        return view('other-services.foreign-currency-exchange');
    }

    public function safeDepositIndex()
    {
        return view('other-services.safe-deposit');
    }
}
