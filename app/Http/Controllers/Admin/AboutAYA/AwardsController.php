<?php

namespace App\Http\Controllers\Admin\AboutAYA;

use App\Http\Controllers\Controller;
use App\Models\AwardDesc;
use App\Models\Award;
use App\Models\Year;
use Illuminate\Http\Request;
use URL;
Use DB;

class AwardsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }
    public function awardPage() {
       
        return view ('admin.page.about-aya.awards.index');
    }

    public function award(){
        $award_list = DB::table('awards')->get();
        return view ('admin.awards.award')->with('award_list',$award_list); 
    }

    public function awardsescUpdate(Request $request)
    {
        $award_desc = $request->award_desc;

        $banner = DB::table('award_descs')
                ->update ([
                    'award_desc' => $award_desc,
                    'updated_by' => auth()->user()->id
                ]);
        return redirect('admin/pagelist/about-aya/awards');
    }

    public function insertAward(Request $request) {
        $award_id = $request->award_id;
        $year_id = $request->year_id;
        $year = $request->year;
        $award_title = $request->award_title;
        $award_text = $request->award_text;
        $award_img_old = $request->award_img_old;
        $award_img = $request->award_img;
        
        $award = new Award;
        $award->year_id = $year_id;
        $award->award_title = $award_title;
        $award->award_text = $award_text;
        $award->award_img = $award_img;
        $award->created_by = auth()->user()->id;
        $award->updated_by = auth()->user()->id;
        $award->save();
    
        $award_list = DB::table('awards')->get();
        return redirect('/admin/awards');
    }
    

        public function awardAdd()
        {   
        $award_list = DB::table('awards')->get();
        return view ('admin.awards.awardadd');
        }

        public function awardEdit($award_id)
        {  
            $award_data = DB::table('awards')->where('id', $award_id)->first();
            return view ('admin.awards.awardedit')->with('award_data',$award_data);
        }
        public function awardUpdate(Request $request)
        {
            $award_id = $request->award_id;
            $year_id = $request->year_id;
            $award_title = $request->award_title;
            $award_text = $request->award_text;
            $award_img_old = $request->award_img_old;
            $award_img = $request->award_img;
            
            if ($request->award_img_old == '') {
                if ($request->hasFile('award_img')) {
                    $imageBreak = $request->file('award_img');
                    $file = $imageBreak->getClientOriginalName();
                    $upload_path = base_path() . '/page_images/about-aya/ayabank-profile/mission-corporate/';
                    $imageBreak->move($upload_path, $file);
                    $award_img_path = "page_images/about-aya/ayabank-profile/mission-corporate/" . $file;
                } else {
                    $award_img_path = '';
                }
            } else {
                $award_img_path = $request->award_img_old;
            }
            $branch = DB::table ('awards')
                ->where('id', $award_id)
                ->update ([
                    'year_id' => $year_id,
                    'award_title' => $award_title,
                    'award_text' => $award_text,
                    'award_img' => $award_img_path,
                    'updated_by' => auth()->user()->id
                ]);
                $award_list = DB::table('awards')->get();
                return redirect('/admin/awards');
        }
       
    }
