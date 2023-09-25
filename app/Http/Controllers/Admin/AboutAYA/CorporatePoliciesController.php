<?php

namespace App\Http\Controllers\Admin\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutAYA\CorporatePolicies;
use App\Models\AboutAYA\CorporatePoliciesDetail;
use DB;

class CorporatePoliciesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function pageCorporatePolicies($value='')
    {
        $corporate_policies = CorporatePolicies::get();
        $corporate_policies_detail = CorporatePoliciesDetail::get();
        return view('admin.page.about-aya.corporate-policies.index')->with('corporate_policies',$corporate_policies)
                                                                    ->with('corporate_policies_detail',$corporate_policies_detail);
    }

    public function pageCPSection1(Request $request)
    {
        $policy_detail_count = $request->policy_detail_count;
        $co_policies_title = $request->co_policies_title;
        $co_po_id = $request->co_po_id;

        for ($co_po_detail=1; $co_po_detail <= $policy_detail_count ; $co_po_detail++) { 
            $co_po_detail_id = $request->input('co_po_detail_id_'.$co_po_detail);
            $co_po_detail_title = $request->input('co_po_detail_title_'.$co_po_detail);
            $co_po_detail_desc = $request->input('co_po_detail_desc_'.$co_po_detail);
            
            if($co_po_detail_id != '0') {
                $banner = DB::table('corporate_policies_details')
                    ->where('id',$co_po_detail_id)
                    ->update([
                        'policies_title' => $co_po_detail_title,
                        'policies_desc' => $co_po_detail_desc,
                        'updated_by' => auth()->user()->id
                    ]);
            } else {
                $corporate_policies_detail = new CorporatePoliciesDetail;
                $corporate_policies_detail->policies_id = $co_po_id;
                $corporate_policies_detail->policies_title = $co_po_detail_title;
                $corporate_policies_detail->policies_desc = $co_po_detail_desc;
                $corporate_policies_detail->updated_by = auth()->user()->id;
                $corporate_policies_detail->created_by = auth()->user()->id;
                $corporate_policies_detail->save();
            }
        }

        return redirect()->back();
    }
}
