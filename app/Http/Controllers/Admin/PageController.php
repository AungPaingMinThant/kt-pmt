<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutAYA\AyabankProfilePageConfigure;
use App\Models\AboutAYA\AyabankProfilePageCorproateInfo;
use App\Models\PageBanner;
use DB;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function pageList()
    {
        return view('admin.page.main');
    }

    public function pageAboutAYAList()
    {
        return view('admin.page.about-aya.list');
    }

    public function bannerUpdate(Request $request)
    {
        $page_slug = $request->page_slug;
        $desktop_banner_image = $request->desktop_banner_image;
        $mobile_banner_image = $request->mobile_banner_image;
        $banner_tagline = $request->banner_tagline;

        if($request->desktop_img_old == '') {
            if ($request->hasFile('desktop_banner_image')) {
                $bannerImageFile = $request->file('desktop_banner_image');
                $file = $bannerImageFile->getClientOriginalName();
                $upload_path = base_path() . '/banner_images/about-aya/ayabank-profile/';
                $bannerImageFile->move($upload_path, $file);
                $banner_desk_img_path = "banner_images/about-aya/ayabank-profile/" . $file;
            }
            
        } else {
            $banner_desk_img_path = $request->desktop_img_old;
        }

        if($request->mobile_img_old == '') {
            if ($request->hasFile('mobile_banner_image')) {
                $mobilebannerImageFile = $request->file('mobile_banner_image');
                $file = $mobilebannerImageFile->getClientOriginalName();
                $upload_path = base_path() . '/banner_images/about-aya/ayabank-profile/';
                $mobilebannerImageFile->move($upload_path, $file);
                $banner_mobile_img_path = "banner_images/about-aya/ayabank-profile/" . $file;
            }
            
        } else {
            $banner_mobile_img_path = $request->mobile_img_old;
        }

        $banner = DB::table('page_banners')
                    ->where('page_slug', $page_slug)
                    ->update([
                        'desktop_banner' => $banner_desk_img_path,
                        'mobile_banner' => $banner_mobile_img_path,
                        'banner_title' => $banner_tagline,
                        'updated_by' => auth()->user()->id
                    ]);

        return redirect()->back();
    }
}
