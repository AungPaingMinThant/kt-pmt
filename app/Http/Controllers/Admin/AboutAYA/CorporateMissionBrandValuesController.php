<?php

namespace App\Http\Controllers\Admin\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutAYA\MissionCopBrandPromise;
use App\Models\AboutAYA\MissionCopBrandPromiseAspectExcellence;
use App\Models\AboutAYA\MissionCopBrandPromiseAspectSincerity;

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

    public function corporateSection1Update(Request $request) {
        $page_title_1 = $request->page_title_1;
        $page_desc_1 = $request->page_desc_1;
        $page_title_2 = $request->page_title_2;
        $page_desc_2 = $request->page_desc_2;
        $aspect_1 = $request->aspect_1;
        $aspect_2 = $request->aspect_2;
        $aspect_3 = $request->aspect_3;
        $aspect_4 = $request->aspect_4;
        $aspect_5 = $request->aspect_5;
        $aspect_6 = $request->aspect_6;
    
        $banner = DB::table('mission_cop_brand_promises')
            ->update ([
                'page_title_1' => $page_title_1,
                'page_desc_1' => $page_desc_1,
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
    
            return redirect ('admin/pagelist/about-aya/mission-corporate');
    }
    
    

}

