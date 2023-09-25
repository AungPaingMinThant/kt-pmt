<?php

namespace App\Http\Controllers\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutAYA\CorporatePolicies;
use App\Models\AboutAYA\CorporatePoliciesDetail;
use DB;

class GovernanceController extends Controller
{
    public function riskManagementIndex()
    {
        return view('about-aya.governance.risk-management');
    }

    public function riskGovernanceIndex()
    {
        return view('about-aya.governance.risk-governance');
    }

    public function riskMgmtFrameworkIndex()
    {
        return view('about-aya.governance.risk-management-framework');
    }

    public function riskMgmtControlIndex()
    {
        return view('about-aya.governance.risk-management-control');
    }

    public function managingRiskIndex()
    {
        return view('about-aya.governance.managing-risk');
    }

    public function complianceIndex()
    {
        return view('about-aya.governance.compliance');
    }

    public function corporateGovernanceIndex()
    {
        return view('about-aya.governance.corporate-governance');
    }

    public function AMLCFTIndex()
    {
        return view('about-aya.governance.aml-cft');
    }

    public function corporatePolicyIndex()
    {
        $corporate_policies = CorporatePolicies::get();
        $corporate_policies_detail = CorporatePoliciesDetail::get();
        return view('about-aya.governance.corporate-policy')->with('corporate_policies',$corporate_policies)
                                                            ->with('corporate_policies_detail',$corporate_policies_detail);
    }
}
