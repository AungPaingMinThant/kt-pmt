<?php

namespace App\Http\Controllers\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GovernanceController extends Controller
{
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

    public function complianceIndex($value='')
    {
        return view('about-aya.governance.compliance');
    }
}
