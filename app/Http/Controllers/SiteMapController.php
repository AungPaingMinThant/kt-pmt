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

    public function personalIndex()
    {
        return view('sitemap.personal.personal-banking');
    }

    public function personalACIndex()
    {
        return view('sitemap.personal.account-saving');
    }

    public function personalBorrowIndex()
    {
        return view('sitemap.personal.borrowing');
    }

    public function personalHirePurchaseIndex()
    {
        return view('sitemap.personal.hirepurhase');
    }

    public function personalRemittanceIndex()
    {
        return view('sitemap.personal.remittance');
    }

    public function personalInsIndex()
    {
        return view('sitemap.personal.insurance');
    }

    public function personalLifeInsIndex()
    {
        return view('sitemap.personal.life-insurance');
    }

    public function personalTravelInsIndex()
    {
        return view('sitemap.personal.travel-insurance');
    }

    public function personalOtherIndex()
    {
        return view('sitemap.personal.other-services');
    }
}
