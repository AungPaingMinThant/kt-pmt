<?php

namespace App\Http\Controllers\Admin\PersonalBanking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExchangeRate;
use App\Models\ExchangeRateBuySell;
use App\Models\OtherExchangeRate;
use App\Models\WorkerRemittance;
use App\Models\PersonalBanking\OtherServices\ForeignCurrencyExchangeService;
use App\Models\FAQ;
use DB;

class OtherServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function pageForeignCurrencyExchange()
    {
        $exchange_rate = ExchangeRate::get();
        $exchange_rate_buy_sell = ExchangeRateBuySell::orderBy('id','desc')->first();

        $other_rate = OtherExchangeRate::orderBy('id','desc')->first();
        $worker_remittance = WorkerRemittance::orderBy('id','desc')->first();

        $page_data = ForeignCurrencyExchangeService::first();
        
        return view('admin.page.personal-banking.other-services.foreign-currency-exchange-services')
                ->with('exchange_rate',$exchange_rate)
                ->with('exchange_rate_buy_sell',$exchange_rate_buy_sell)
                ->with('other_rate',$other_rate)
                ->with('worker_remittance',$worker_remittance)
                ->with('page_data',$page_data);
    }

    public function pageForeignCurrencyExchangeSpecialUpdate(Request $request)
    {
        $section_title = $request->section_title;
        $section_desc = htmlentities($request->section_desc);

        $banner = DB::table('foreign_currency_exchange_services')
                    ->update([
                        'section_title' => $section_title,
                        'section_desc' => $section_desc,
                        'updated_by' => auth()->user()->id
                    ]);

        return redirect('admin/pagelist/personal-banking/other-services/foreign-currency-exchange-service');
    }

    public function pageForeignCurrencyExchangeDisclaimerUpdate(Request $request)
    {
        $disclaimer_title = $request->disclaimer_title;
        $disclaimer_desc = htmlentities($request->disclaimer_desc);

        $banner = DB::table('foreign_currency_exchange_services')
                    ->update([
                        'disclaimer_title' => $disclaimer_title,
                        'disclaimer_desc' => $disclaimer_desc,
                        'updated_by' => auth()->user()->id
                    ]);

        return redirect('admin/pagelist/personal-banking/other-services/foreign-currency-exchange-service');
    }
}
