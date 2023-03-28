<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TradeController extends Controller
{
    public function tradeFinancingIndex()
    {
        return view('business.trade.trade-financing');
    }

    public function tradeServicesIndex()
    {
        return view('business.trade.trade-services');
    }
}
