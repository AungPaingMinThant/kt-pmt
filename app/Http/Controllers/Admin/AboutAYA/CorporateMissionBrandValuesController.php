<?php

namespace App\Http\Controllers\Admin\AboutAYA;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutAYA\MissionCopBrandPromise;
use App\Models\AboutAYA\MissionCopBrandProiseAspectExcellence;
use App\Models\AboutAYA\MissionCopBrandPromiseAspectSincerity;
use DB;
use URL;
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
                'updated_by' => auth()->user()->id 
            ]);
            
        return redirect('admin/pagelist/about-aya/mission-corporate');
    }

    public function excellanceUpdate(Request $request) {
        $aspect_1_title = $request->aspect_1_title;
        $aspect_1_desc = $request->aspect_1_desc;
        $excellence_count = $request-> excellence_count;
        $baseurl = URL::to('/') . '/';
        
        $banner = DB::table('mission_cop_brand_promises')
            ->update ([
                'aspect_1_title' => $aspect_1_title,
                'aspect_1_desc' => $aspect_1_desc,
                'updated_by' => auth()->user()->id
    
            ]);
            for ($excellence_detail = 1; $excellence_detail <= $excellence_count; $excellence_detail++) {
                $excellence_detail_id = $request->input('exce_id_' . $excellence_detail);
                $excellence_detail_desc = htmlentities($request->input('excellence_desc_' . $excellence_detail));
                $excellence_detail_desc = str_replace("../../../", $baseurl , $excellence_detail_desc);
                if($excellence_detail_id !='0') {
                   $banner = DB::table('mission_cop_brand_proise_aspect_excellences')
                            ->where('id', $excellence_detail_id)
                            ->update([
                                'excellence_desc' => $excellence_detail_desc,
                                'updated_by' => auth()->user()->id
                            ]);
                } else {
                   $mission_promise_aspect_excellences = new MissionCopBrandProiseAspectExcellence;
                   $mission_promise_aspect_excellences->excellence_desc= htmlspecialchars_decode($excellence_detail_desc);
                   $mission_promise_aspect_excellences->updated_by = auth()->user()->id;
                   $mission_promise_aspect_excellences->created_by = auth()->user()->id;
                   $mission_promise_aspect_excellences->save();
                }
    
           }
    
    
            return redirect ('admin/pagelist/about-aya/mission-corporate');
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
        $sincerities_count = $request->sincerities_count;
       

        $sincerities_desc = $request->sincerities_desc; // Fix the variable name
        $base_url = URL::to('/').'/';
    
        $banner = DB::table('mission_cop_brand_promises')
            ->update([
                'aspect_6_title' => $aspect_6_title,
                'aspect_6_desc' => $aspect_6_desc,
                'updated_by' => auth()->user()->id
            ]);
    
        for ($sincerities_detail = 1; $sincerities_detail <= $sincerities_count; $sincerities_detail++) {
            $sincerities_detail_id = $request->input('sin_id_' . $sincerities_detail);
            $sincerities_detail_desc = htmlentities($request->input('sincerities_desc_' . $sincerities_detail));
            $sincerities_detail_desc = str_replace("../../../", $base_url, $sincerities_detail_desc);
    
            if ($sincerities_detail_id != '0') {
                $banner = DB::table('mission_cop_brand_promise_aspect_sincerities')
                    ->where('id', $sincerities_detail_id)
                    ->update([
                       
                        'sincerities_desc' => $sincerities_detail_desc,
                        'updated_by' => auth()->user()->id
                    ]);
            } else {
                $mission_promise_aspect_sincerities = new MissionCopBrandPromiseAspectSincerity;
                $mission_promise_aspect_sincerities->sincerities_desc = htmlspecialchars_decode($sincerities_detail_desc);
                $mission_promise_aspect_sincerities->updated_by = auth()->user()->id;
                $mission_promise_aspect_sincerities->created_by = auth()->user()->id;
                $mission_promise_aspect_sincerities->save();
            }
        }
    
        return redirect('admin/pagelist/about-aya/mission-corporate');
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

        

        if ($request->aspect_cta_1_img_old == '') {
            if ($request->hasFile('aspect_cta_1_img')) {
                $imageBreak = $request->file('aspect_cta_1_img');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/ayabank-profile/mission-corporate/';
                $imageBreak->move($upload_path, $file);
                $aspect_cta_1_path = "page_images/about-aya/ayabank-profile/mission-corporate/" . $file;
            } else {
                $aspect_cta_1_path = '';
            }
        } else {
            $aspect_cta_1_path = $request->aspect_cta_1_img_old;
        }
        
        if ($request->aspect_cta_2_img_old == '') {
            if ($request->hasFile('aspect_cta_2_img')) {
                $imageBreak = $request->file('aspect_cta_2_img');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/ayabank-profile/mission-corporate/';
                $imageBreak->move($upload_path, $file);
                $aspect_cta_2_path = "page_images/about-aya/ayabank-profile/mission-corporate/" . $file;
            } else {
                $aspect_cta_2_path = '';
            }
        } else {
            $aspect_cta_2_path = $request->aspect_cta_2_img_old;
        }
        if ($request->aspect_cta_3_img_old == '') {
            if ($request->hasFile('aspect_cta_3_img')) {
                $imageBreak = $request->file('aspect_cta_3_img');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/ayabank-profile/mission-corporate/';
                $imageBreak->move($upload_path, $file);
                $aspect_cta_3_path = "page_images/about-aya/ayabank-profile/mission-corporate/" . $file;
            } else {
                $aspect_cta_3_path = '';
            }
        } else {
            $aspect_cta_3_path = $request->aspect_cta_3_img_old;
        }

        $banner = DB::table('mission_cop_brand_promises')
                    ->update([
                        'aspect_cta_1_title' => $aspect_cta_1_title,
                        'aspect_cta_1_img' => $aspect_cta_1_path,
                        'aspect_cta_1_link' => $aspect_cta_1_link,
                        'aspect_cta_2_title' => $aspect_cta_2_title,
                        'aspect_cta_2_img' => $aspect_cta_2_path,
                        'aspect_cta_2_link' => $aspect_cta_2_link,
                        'aspect_cta_3_title' => $aspect_cta_3_title,
                        'aspect_cta_3_img' => $aspect_cta_3_path,
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
        $brand_img = $request->brand_img;
        
        
        if($request->brand_img_old == '') {
            if ($request->hasFile('brand_img')) {
                $imageBreak = $request->file('brand_img');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/ayabank-profile/mission-corporate/';
                $imageBreak->move($upload_path, $file);
                $brand_img = "page_images/about-aya/ayabank-profile/mission-corporate/" . $file;
            } else {
                $brand_img = $request->brand_img_old;
            }
        $banner = DB::table('mission_cop_brand_promises')
        ->where('id', $id)
        ->update([
            'brand_title' => $brand_title,
            'brand_desc_1' => $brand_desc_1,
            'brand_desc_2' => $brand_desc_2,
            'brand_img' => $brand_img,
            'updated_by' => auth()->user()->id
        ]);
    
    

        return redirect('admin/pagelist/about-aya/mission-corporate');
    
    } }
}

