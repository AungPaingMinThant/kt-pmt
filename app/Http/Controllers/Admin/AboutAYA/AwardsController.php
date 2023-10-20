<?php

namespace App\Http\Controllers\Admin\AboutAYA;

use App\Http\Controllers\Controller;
use App\Models\AwardDesc;
// use App\Models\Award;
// use App\Models\Year;
use Illuminate\Http\Request;
use URL;
Use DB;

class AwardsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }
    public function pageAwards() {
        return view ('admin.page.about-aya.awards.index');
    }

    public function descAwards(Request $request) {
        $award_desc = $request->award_desc;

        $banner = DB::table('award_descs')
                    ->update ([
                        'award_desc' => $award_desc,
                        'updated_by' => auth()->user()->id
                    ]);
            return redirect('admin/pagelist/about-aya/awards');
    } 
    public function awardUpdate(Request $request) {
        $award_title = $request->award_title;
        $year_id = $request->year_id;
        $award_text = $request->award_text;
        $award_img_old = $request->award_img_old;
        $award_img = $request->award_img;
        $award_count = $request->award_count;
        $base_url = URL::to('/').'/';
    
        for ($award_detail = 1; $award_detail <= $award_count; $award_detail++) {

            $award_id = $request->input('award_detail_id_' . $award);
            $award_title = $request->input('awaed_title_'.$award);
            $award_text = $request->input('award_text_'.$award);
            $award_img = $request->input('award_img_'.$award);

            if ($award_img_old == '') {
                if ($request->hasFile('award_img_'.$award)) {
                    $award_img = $request->file('award_img_'.$award);
                    $file = $award_img->getClientOriginalName();
                    $upload_path = base_path() . '/page_images/about-aya/awards/';
                    $award_img->move($upload_path, $file);
                    $award_img_path = "page_images/about-aya/awards/" . $file;
                } else {
                    $award_img_path = '';
                }
            } else {
                $award_img_path = $request->input('award_img_old'.$award);
            }
        }
    }
}
