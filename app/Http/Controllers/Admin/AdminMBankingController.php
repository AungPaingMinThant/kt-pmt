<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MobileBanking;
use App\Models\MobileBankingFact;
use DB;

class AdminMBankingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function mbanking()
    {
        $mobilebanking = MobileBanking::first();
        $mobilebankingfact = MobileBankingFact::where('mobile_banking_id',$mobilebanking->id)->get();
        return view('admin.page.mbanking')->with('mobilebanking',$mobilebanking)
                                        ->with('mobilebankingfact',$mobilebankingfact);
    }

    public function mbankingBanner(Request $request)
    {
        $headline_1 = $request->headline_1;
        $headline_2 = $request->headline_2;
        $headline_3 = $request->headline_3;
        $banner_img = $request->banner_img;
        $banner_img_old = $request->banner_img_old;

        if ($banner_img_old == '') {
            if ($request->hasFile('banner_img')) {
                $banner = $request->file('banner_img');
                $file = $banner->getClientOriginalName();
                $upload_path = public_path() . '/mBanking/';
                $banner->move($upload_path, $file);
                $path = "mBanking/" . $file;
            } else {
                $path = '';
            }
        } else {
            $path = $banner_img_old;
        }

        $mbanking = DB::table('mobile_bankings')
                    ->update([
                        'headline_1' => $headline_1,
                        'headline_2' => $headline_2,
                        'headline_3' => $headline_3,
                        'banner_img' => $path,
                        'updated_at' => date('Y-m-d H:i:s'),
                        'updated_by' => auth()->user()->id
                    ]);

        return redirect('/admin/page/mbanking/edit');
    }

    public function mbankingTagline(Request $request)
    {
        $tag_line = $request->tag_line;
        $tag_desc = $request->tag_desc;

        $mbanking = DB::table('mobile_bankings')
                    ->update([
                        'tag_line' => $tag_line,
                        'tag_desc' => $tag_desc,
                        'updated_at' => date('Y-m-d H:i:s'),
                        'updated_by' => auth()->user()->id
                    ]);

        return redirect('/admin/page/mbanking/edit');
    }

    public function mbankingFact(Request $request)
    {
        $fact_id = $request->fact_id;
        $fact_icon = $request->input('section1_fact_icon_'.$fact_id);
        $fact_icon_old = $request->input('section1_fact_icon_'.$fact_id.'_old');
        $fact_img = $request->input('section1_fact_img_'.$fact_id);
        $fact_img_old = $request->input('section1_fact_img_'.$fact_id.'_old');
        $fact_title = $request->input('section1_fact_title_'.$fact_id);
        $fact_desc = $request->input('wysiwyg-editor');
    }
}
