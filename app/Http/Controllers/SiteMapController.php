<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteMapController extends Controller
{
    public function digitalIndex()
    {
        return view('sitemap.digital.digital-services');
    }

    public function digiOnlineIndex()
    {
        return view('sitemap.digital.online-payment');
    }

    public function digiCardServicesIndex()
    {
        return view('sitemap.digital.card-services');
    }

    public function digiWalletSolutionIndex()
    {
        return view('sitemap.digital.wallet-solution');
    }

    public function digiGuidelineIndex()
    {
        return view('sitemap.digital.guideline');
    }

    public function digiCardMerchantIndex()
    {
        return view('sitemap.digital.merchant-services');
    }


}
