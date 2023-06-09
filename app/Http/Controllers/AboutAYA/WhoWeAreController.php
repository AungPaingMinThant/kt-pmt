<?php

namespace App\Http\Controllers\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WhoWeAreController extends Controller
{
    public function meetOurLeadersIndex($value='')
    {
        return view('about-aya.meet-our-leaders.index');
    }

    public function profileIndex($value='')
    {
        return view('about-aya.corporate-profile.profile-index');
    }

    public function shareHoldingIndex($value='')
    {
        return view('about-aya.corporate-profile.share-holding-information-index');
    }

    public function businessPracticeIndex($value='')
    {
        return view('about-aya.corporate-profile.business-practices-index');
    }

    public function stakeholderIndex($value='')
    {
        return view('about-aya.our-strategies.stakeholder-index');
    }

    public function riskManagementIndex($value='')
    {
        return view('about-aya.governance.risk-management');
    }

    public function riskGovernanceIndex($value='')
    {
        return view('about-aya.governance.risk-governance');
    }

    public function riskMgmtFrameworkIndex($value='')
    {
        return view('about-aya.governance.risk-management-framework');
    }

    public function riskMgmtControlIndex($value='')
    {
        return view('about-aya.governance.risk-management-control');
    }

    public function managingRiskIndex($value='')
    {
        return view('about-aya.governance.managing-risk');
    }
}
