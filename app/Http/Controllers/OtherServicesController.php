<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExchangeRate;
use App\Models\ExchangeRateBuySell;

class OtherServicesController extends Controller
{
    public function foreignCurrencyIndex()
    {
        $exchange_rate = ExchangeRate::get();
        $exchange_rate_buy_sell = ExchangeRateBuySell::orderBy('id','desc')->first();
        
        return view('other-services.foreign-currency-exchange')->with('exchange_rate',$exchange_rate)
                                                                ->with('exchange_rate_buy_sell',$exchange_rate_buy_sell);
    }

    public function safeDepositIndex()
    {
        return view('other-services.safe-deposit');
    }
}
