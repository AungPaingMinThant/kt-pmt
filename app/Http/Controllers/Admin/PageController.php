<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AyabankProfilePageConfigure;
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

    public function pageAYAbankProfile()
    {
        return view('admin.page.about-aya.ayabank-profile');
    }

    public function bannerUpdate(Request $request)
    {
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

        $banner = DB::table('ayabank_profile_page_configures')
                    ->update([
                        'banner' => $banner_desk_img_path,
                        'mobile_banner' => $banner_mobile_img_path,
                        'banner_title' => $banner_tagline
                    ]);

        return redirect('admin/pagelist/about-aya/ayabank-profile');
    }

    public function ayabankProfileSection1Update(Request $request)
    {
        $page_title = $request->page_title;
        $first_3_col_text = $request->first_3_col_text;
        $image_break = $request->image_break;
        $image_break_old = $request->image_break_old;
        $second_text = $request->second_text;

        if($request->image_break_old == '') {
            if ($request->hasFile('image_break')) {
                $imageBreak = $request->file('image_break');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/ayabank-profile/';
                $imageBreak->move($upload_path, $file);
                $image_break_url = "page_images/about-aya/ayabank-profile/" . $file;
            }
            
        } else {
            $image_break_url = $request->image_break_old;
        }

        $banner = DB::table('ayabank_profile_page_configures')
                    ->update([
                        'page_title' => $page_title,
                        'first_3_col_text' => $first_3_col_text,
                        'image_break' => $image_break_url,
                        'second_text' => $second_text
                    ]);

        return redirect('admin/pagelist/about-aya/ayabank-profile');
    }
}
