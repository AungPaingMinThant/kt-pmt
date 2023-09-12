<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutAYA\AyabankProfilePageConfigure;
use App\Models\AboutAYA\AyabankProfilePageCorproateInfo;
use DB;

class AYABankProfileController extends Controller
{
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

    public function ayabankProfileCorporateInfoUpdate(Request $request)
    {
        $corporate_info_count = $request->corporate_info_count;
        $corporate_info_title = $request->corporate_info_title;
        $CIS_title_1 = $request->CIS_title_1;
        $CIS_title_MM_1 = $request->CIS_title_MM_1;
        $CIS_desc_1 = $request->CIS_desc_1;
        $CIS_desc_MM_1 = $request->CIS_desc_MM_1;
        $CIS_img_1 = $request->CIS_img_1;

        // CIS_img_old_
    }
}
