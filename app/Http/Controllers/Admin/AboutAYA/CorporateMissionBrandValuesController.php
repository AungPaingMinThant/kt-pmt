<?php

namespace App\Http\Controllers\Admin\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutAYA\AyabankProfilePageConfigure;
use App\Models\AboutAYA\MissionCopBrandPromise;

class CorporateMissionBrandValuesController extends Controller
{
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
    

}

