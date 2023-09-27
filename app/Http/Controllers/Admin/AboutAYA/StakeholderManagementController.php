<?php

namespace App\Http\Controllers\Admin\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AboutAYA\StakeHolderManagement;
use App\Models\AboutAYA\CorporatePolicies;
use App\Models\AboutAYA\CorporatePoliciesDetail;
use DB;
use URL;

class StakeholderManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function pageStakeholderManagement($value='')
    {
        $corporate_policies = CorporatePolicies::get();
        $corporate_policies_detail = CorporatePoliciesDetail::get();
        return view('admin.page.about-aya.stakeholder-management.index')->with('corporate_policies',$corporate_policies)
                                                                        ->with('corporate_policies_detail',$corporate_policies_detail);
    }

    public function chartSectionUpdate(Request $request)
    {
        $section_title = $request->section_title;
        $chart_image = $request->chart_image;
        $chart_image_old = $request->chart_image_old;
    }
}
