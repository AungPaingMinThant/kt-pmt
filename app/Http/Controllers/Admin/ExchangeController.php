<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ExchangeRate;
use App\Models\ExchangeRateBuySell;
use DB;

class ExchangeController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function index()
    {
        $exchange_rate = ExchangeRate::get();
        $exchange_rate_buy_sell = ExchangeRateBuySell::orderBy('id','desc')->get();
        
        return view('admin.exchange.list')->with('exchange_rate',$exchange_rate)
                                            ->with('exchange_rate_buy_sell',$exchange_rate_buy_sell);
    }

    public function editExchange()
    {
        $exchange_rate = ExchangeRate::get();
        $exchange_rate_buy_sell = ExchangeRateBuySell::orderBy('id','desc')->first();

        return view('admin.exchange.edit')->with('exchange_rate',$exchange_rate)
                                            ->with('exchange_rate_buy_sell',$exchange_rate_buy_sell);
    }

    public function updateExchange(Request $request)
    {
        $USD_buying = $request->USD_buying;
        $USD_selling = $request->USD_selling;
        $EUR_buying = $request->EUR_buying;
        $EUR_selling = $request->EUR_selling;
        $SGD_buying = $request->SGD_buying;
        $SGD_selling = $request->SGD_selling;
        $updated_by = auth()->user()->id;

        $exchange = new ExchangeRateBuySell();
        $exchange->USD_buying = $USD_buying;
        $exchange->USD_selling = $USD_selling;
        $exchange->EUR_buying = $EUR_buying;
        $exchange->EUR_selling = $EUR_selling;
        $exchange->SGD_buying = $SGD_buying;
        $exchange->SGD_selling = $SGD_selling;
        $exchange->updated_by = $updated_by;
        $exchange->save();

        return redirect('/admin/exchange-rate')->with('Exchange Rate successfully updated.');
    }
}
