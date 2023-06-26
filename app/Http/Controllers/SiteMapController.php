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

    public function digiCardPrivilegeIndex()
    {
        return view('sitemap.digital.card-privilege');
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

    public function businessIndex()
    {
        return view('sitemap.business.business-banking');
    }

    public function businessACIndex()
    {
        return view('sitemap.business.account-saving');
    }

    public function businessRemitIndex()
    {
        return view('sitemap.business.remittance');
    }

    public function businessBorrowingIndex()
    {
        return view('sitemap.business.borrowing');
    }
    
    public function businessTradeIndex()
    {
        return view('sitemap.business.trade');
    }
    
    public function businessCashIndex()
    {
        return view('sitemap.business.cash-management');
    }
    
    public function businessInsIndex()
    {
        return view('sitemap.business.insurance');
    }

    public function aboutAYAIndex()
    {
        return view('sitemap.about-aya.index');
    }

    public function whoWeAreIndex()
    {
        return view('sitemap.about-aya.who-we-are');
    }

    public function governanceIndex()
    {
        return view('sitemap.about-aya.governance');
    }

    public function newsroomIndex()
    {
        return view('sitemap.about-aya.news-room');
    }

    public function corporateProfileIndex()
    {
        return view('sitemap.about-aya.corporate-profile');
    }

    public function leadershipIndex()
    {
        return view('sitemap.about-aya.leadership');
    }

    public function ourStrategiesIndex()
    {
        return view('sitemap.about-aya.our-strategies');
    }

    public function underMaintainIndex()
    {
        return view('under-maintenance');
    }




}
