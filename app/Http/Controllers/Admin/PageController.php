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

    public function pagePersoanlBankingList()
    {
        return view('admin.page.personal-banking.list');
    }

    public function bannerUpdate(Request $request)
    {
        $page_slug = $request->page_slug;
        $tagline_title_image = $request->desktop_banner_image;
        $mobile_banner_image = $request->mobile_banner_image;
        $banner_tagline = $request->banner_tagline;

        if($request->desktop_img_old == '') {
            if ($request->hasFile('desktop_banner_image')) {
                $bannerImageFile = $request->file('desktop_banner_image');
                $file = $bannerImageFile->getClientOriginalName();
                $upload_path = base_path() . '/banner_images/'.$page_slug;
                $bannerImageFile->move($upload_path, $file);
                $banner_desk_img_path = "banner_images/". $page_slug . "/" . $file;
            }
        } else {
            $banner_desk_img_path = $request->desktop_img_old;
        }

        if($request->mobile_img_old == '') {
            if ($request->hasFile('mobile_banner_image')) {
                $mobilebannerImageFile = $request->file('mobile_banner_image');
                $file = $mobilebannerImageFile->getClientOriginalName();
                $upload_path = base_path() . '/banner_images/'.$page_slug;
                $mobilebannerImageFile->move($upload_path, $file);
                $banner_mobile_img_path = "banner_images/". $page_slug . "/" . $file;
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

    public function taglineUpdate(Request $request)
    {
        $tagline_title = $request->tagline_title;
        $tagline_desc = $request->tagline_desc;
        $tagline_img = $request->tagline_img;
        $tagline_img_old = $request->tagline_img_old;
        $page_slug = $request->page_slug;
        $year = date('Y');
        $month = date('m');
        $day = date('d');

        $media_category_path = 'tagline_img/' . $page_slug;

        if($request->tagline_img_old == '') {
            if ($request->hasFile('tagline_img')) {
                $mediaFile = $request->file('tagline_img');
                $tagline_File = $mediaFile->getClientOriginalName();
                $upload_path = base_path() . '/file/media/' . $media_category_path . '/' . $year .'/'. $month . '/' . $day . '/';
                $mediaFile->move($upload_path, $tagline_File);
                $tagline_img_path = '/file/media/' . $media_category_path . '/' . $year .'/'. $month . '/' . $day . '/' . $tagline_File;
            } else {
                $tagline_img_path = '';
            }      
        } else {
            $tagline_img_path = $request->tagline_img_old;
        }

        $banner = DB::table('taglines')
                    ->where('page_slug', $page_slug)
                    ->update([
                        'tagline_title' => $tagline_title,
                        'tagline_desc' => $tagline_desc,
                        'tagline_img' => $tagline_img_path,
                        'updated_by' => auth()->user()->id
                    ]);

        return redirect()->back();
    }
}
