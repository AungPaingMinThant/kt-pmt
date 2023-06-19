<?php

namespace App\Http\Controllers\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WhoWeAreController extends Controller
{
    public function meetOurLeadersIndex()
    {
        return view('about-aya.meet-our-leaders.index');
    }

    public function contactBoardIndex()
    {
        return view('about-aya.meet-our-leaders.contact-board-index');
    }

    public function profileIndex()
    {
        return view('about-aya.corporate-profile.profile-index');
    }

    public function shareHoldingIndex()
    {
        return view('about-aya.corporate-profile.share-holding-information-index');
    }

    public function businessPracticeIndex()
    {
        return view('about-aya.corporate-profile.business-practices-index');
    }

    public function stakeholderIndex()
    {
        return view('about-aya.our-strategies.stakeholder-index');
    }

    public function missionIndex()
    {
        return view('about-aya.corporate-profile.mission-index');
    }

    public function corporateStrategyIndex()
    {
        return view('about-aya.our-strategies.corporate-strategy-index');
    }
}
