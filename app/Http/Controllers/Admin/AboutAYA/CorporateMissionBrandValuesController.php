<?php

namespace App\Http\Controllers\Admin\AboutAYA;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutAYA\MissionCopBrandPromise;
use App\Models\AboutAYA\MissionCopBrandPromiseAspectExcellence;
use App\Models\AboutAYA\MissionCopBrandPromiseAspectSincerity;
use DB;
class CorporateMissionBrandValuesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function pageCorporateMissionBrandValues() {
        return view ('admin.page.about-aya.mission-corporate.index');
    }
    public function bannerCorporateUpdate (Request $request)
    {
        $desktop_banner_image = $request->desktop_banner_image;
        $mobile_banner_image = $request->mobile_banner_image;
        $banner_tagline= $request->banner_tagline;

        if($request->desktop_img_old == ''){
            if ($request->hasFile('desktop_banner_image')) {
                $bannerImageFile = $request->file('desktop_banner_image');
                $file = $bannerImageFile->getClientOriginalName();
                $upload_path= base_path() . '/banner_images/about-aya/mission-corporate/';
                $bannerImagefile->move($upload_path, $file);
                $banner_desk_img_path = "banner_images/about-aya/mission-corporate/" .$file;
            }
        } else {
            $banner_desk_img_path = $request->desktop_img_old;
        }

        if($request->mobile_img_old == '') {
            if ($request->hasFile('mobile_banner_image')) {
                $mobilebannerImageFile = $request->file('mobile_banner_image');
                $file=$mobilebannerImageFile->getClientOriginalName();
                $upload_path=base_path() . '/banner_images/about-aya/mission-corporate/';
                $mobilebannerImageFile->move($upload_path, $file);
                $banner_mobile_img_path ="banner_images/about-aya/mission-corporate/" .file;
            }
        } else {
            $banner_mobile_img_path = $request->mobile_img_old;
        }

        $banner = DB::table('mission_cop_brand_promises')
                    ->update([
                        'banner' => $banner_desk_img_path,
                        'mobile_banner' => $banner_mobile_img_path,
                        'banner_title' => $banner_tagline,
                        'updated_by' => auth()->user()->id

                    ]);
        return redirect('/admin/pagelist/about-aya/mission-corporate');
    }

    public function ourmissionUpdate(Request $request) {
        $page_title_1 = $request->page_title_1;
        $page_desc_1 = $request->page_desc_1;
        
    
        $banner = DB::table('mission_cop_brand_promises')
            ->update ([
                'page_title_1' => $page_title_1,
                'page_desc_1' => $page_desc_1,
                'updated_by' => auth()->user()->id
    
            ]);
    
            return redirect ('admin/pagelist/about-aya/mission-corporate');
    }
    public function corporatevaluesUpdate(Request $request) {
        $page_title_2 = $request->page_title_2;
        $page_desc_2 = $request->page_desc_2;
        $aspect_1 = $request->aspect_1;
        $aspect_2 = $request->aspect_2;
        $aspect_3 = $request->aspect_3;
        $aspect_4 = $request->aspect_4;
        $aspect_5 = $request->aspect_5;
        $aspect_6 = $request->aspect_6;
    
        $banner = DB::table('mission_cop_brand_promises')
            ->update([
                'page_title_2' => $page_title_2,
                'page_desc_2' => $page_desc_2,
                'aspect_1' => $aspect_1,
                'aspect_2' => $aspect_2,
                'aspect_3' => $aspect_3,
                'aspect_4' => $aspect_4,
                'aspect_5' => $aspect_5,
                'aspect_6' => $aspect_6,
                'updated_by' => auth()->user()->id // Enclose 'updated_by' in single quotes
            ]);
            
        return redirect('admin/pagelist/about-aya/mission-corporate');
    }
    
    public function excellenceUpdate(Request $request) {
        $aspect_1_title = $request->aspect_1_title;
        $aspect_1_desc = $request->aspect_1_desc;
        $excellence_desc = $request->excellence_desc;
        $excellence_count = $request->excellence_count;
    
        $banner = DB::table('mission_cop_brand_promises')
            ->update([
                'aspect_1_title' => $aspect_1_title,
                'aspect_1_desc' => $aspect_1_desc,
                'updated_by' => auth()->user()->id
            ]);
    
        for ($i = 1; $i <= $excellence_count; $i++) {
            $id = $request->input('id_' . $i);
            $excellence_description = $request->input('excellence_desc_' . $i);
    
            $exe = DB::table('mission_cop_brand_proise_aspect_excellences')
                ->where('id', $id)
                ->update([
                    'excellence_desc' => $excellence_desc, // Corrected variable name
                    'updated_by' => auth()->user()->id
                ]);
        }
    
        return redirect('admin/pagelist/about-aya/mission-corporate');
    }
    
    
    public function teamUpdate(Request $request) {
        $aspect_2_title = $request->aspect_2_title;
        $aspect_2_desc = $request->aspect_2_desc;

        $banner = DB::table('mission_cop_brand_promises')
            ->update ([
                'aspect_2_title' => $aspect_2_title,
                'aspect_2_desc' => $aspect_2_desc,
                'updated_by' => auth()->user()->id

            ]);
            return redirect ('admin/pagelist/about-aya/mission-corporate');
    }
    public function honestyUpdate(Request $request) {
        $aspect_3_title = $request->aspect_3_title;
        $aspect_3_desc = $request->aspect_3_desc;

        $banner = DB::table('mission_cop_brand_promises')
            ->update ([
                'aspect_3_title' => $aspect_3_title,
                'aspect_3_desc' => $aspect_3_desc,
                'updated_by' => auth()->user()->id
            ]);
            return redirect ('admin/pagelist/about-aya/mission-corporate');
    }

    public function integrityUpdate(Request $request) {
        $aspect_4_title = $request->aspect_4_title;
        $aspect_4_desc = $request->aspect_4_desc;

        $banner = DB::table('mission_cop_brand_promises')
            ->update ([
                'aspect_4_title' => $aspect_4_title,
                'aspect_4_desc' => $aspect_4_desc,
                'updated_by' => auth()->user()->id
            ]);
            return redirect ('admin/pagelist/about-aya/mission-corporate');
    }

    public function careUpdate(Request $request) {
        $aspect_5_title = $request->aspect_5_title;
        $aspect_5_desc = $request->aspect_5_desc;
        $aspect_5_desc_text = $request->aspect_5_desc_text;
        $banner = DB::table('mission_cop_brand_promises')
            ->update([
                'aspect_5_title' => $aspect_5_title,
                'aspect_5_desc' => $aspect_5_desc,
                'aspect_5_desc_text' => $aspect_5_desc_text,
                'updated_by' => auth()->user()->id
            ]);
        return redirect('admin/pagelist/about-aya/mission-corporate');
    }
    
    public function sincerityUpdate(Request $request) {
        $aspect_6_title = $request->aspect_6_title;
        $aspect_6_desc = $request->aspect_6_desc;
        

        $banner = DB::table('mission_cop_brand_promises')
            ->update ([
                'aspect_6_title' => $aspect_6_title,
                'aspect_6_desc' => $aspect_6_desc,
                'updated_by' => auth()->user()->id
            ]);
            return redirect ('admin/pagelist/about-aya/mission-corporate');
    }

    public function missioncorporateCTAUpdate(Request $request)
    {
        $aspect_cta_1_img = $request->aspect_cta_1_img;
        $aspect_cta_1_img_old = $request->aspect_cta_1_img_old;
        $aspect_cta_1_title = $request->aspect_cta_1_title;
        $aspect_cta_1_link = $request->aspect_cta_1_link;
        $aspect_cta_2_img = $request->aspect_cta_2_img;
        $aspect_cta_2_img_old = $request->aspect_cta_2_img_old;
        $aspect_cta_2_title = $request->aspect_cta_2_title;
        $aspect_cta_2_link = $request->aspect_cta_2_link;
        $aspect_cta_3_img = $request->aspect_cta_3_img;
        $aspect_cta_3_img_old = $request->aspect_cta_3_img_old;
        $aspect_cta_3_title = $request->aspect_cta_3_title;
        $aspect_cta_3_link = $request->aspect_cta_3_link;

        if($request->aspect_cta_1_img_old == '') {
            if ($request->hasFile('aspect_cta_1_img')) {
                $imageBreak = $request->file('aspect_cta_1_img');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/ayabank-profile/';
                $imageBreak->move($upload_path, $file);
                $aspect_cta_1_img = "page_images/about-aya/ayabank-profile/" . $file;
            } else {
                $aspect_cta_1_img = '';
            }
        } else {
            $aspect_cta_1_img = $request->aspect_cta_1_img_old;
        }
        if($request->aspect_cta_2_img_old == '') {
            if ($request->hasFile('aspect_cta_2_img')) {
                $imageBreak = $request->file('aspect_cta_2_img');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/ayabank-profile/';
                $imageBreak->move($upload_path, $file);
                $aspect_cta_2_img = "page_images/about-aya/ayabank-profile/" . $file;
            } else {
                $aspect_cta_2_img = '';
            }
        } else {
            $aspect_cta_2_img = $request->aspect_cta_2_img_old;
        }
        if($request->aspect_cta_3_img_old == '') {
            if ($request->hasFile('aspect_cta_3_img')) {
                $imageBreak = $request->file('aspect_cta_3_img');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/ayabank-profile/';
                $imageBreak->move($upload_path, $file);
                $aspect_cta_3_img = "page_images/about-aya/ayabank-profile/" . $file;
            } else {
                $aspect_cta_3_img = '';
            }
        } else {
            $aspect_cta_3_img = $request->aspect_cta_3_img_old;
        }

        $banner = DB::table('mission_cop_brand_promises')
                    ->update([
                        'aspect_cta_1_title' => $aspect_cta_1_title,
                        'aspect_cta_1_img' => $aspect_cta_1_img,
                        'aspect_cta_1_link' => $aspect_cta_1_link,
                        'aspect_cta_2_title' => $aspect_cta_2_title,
                        'aspect_cta_2_img' => $aspect_cta_2_img,
                        'aspect_cta_2_link' => $aspect_cta_2_link,
                        'aspect_cta_3_title' => $aspect_cta_3_title,
                        'aspect_cta_3_img' => $aspect_cta_3_img,
                        'aspect_cta_3_link' => $aspect_cta_3_link,
                        'updated_by' => auth()->user()->id
                    ]);

        return redirect('admin/pagelist/about-aya/mission-corporate');
    }

    public function brandpromiseUpdate(Request $request) {
        $brand_title = $request->brand_title;
        $brand_desc_1 = $request->brand_desc_1;
        $brand_desc_2 = $request->brand_desc_2;
        $brand_img_old = $request->brand_img_old;
        
        if($request->brand_img_old == '') {
            if ($request->hasFile('brand_img')) {
                $imageBreak = $request->file('brand_img');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/ayabank-profile/';
                $imageBreak->move($upload_path, $file);
                $brand_img = "page_images/about-aya/ayabank-profile/" . $file;
            } else {
                $brand_img = '';
            }
        } else {
            $brand_img = $request->brand_img_old;
        }
        $banner = DB::table('mission_cop_brand_promises')
        // ->where('id', $banner_id)
        ->update([
            'brand_title' => $brand_title,
            'brand_desc_1' => $brand_desc_1,
            'brand_desc_2' => $brand_desc_2,
            'brand_img' => $brand_img,
            'updated_by' => auth()->user()->id
        ]);
    
    

        return redirect('admin/pagelist/about-aya/mission-corporate');
    
    }



}

