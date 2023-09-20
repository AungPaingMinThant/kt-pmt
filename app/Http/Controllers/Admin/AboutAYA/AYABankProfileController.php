<?php

namespace App\Http\Controllers\Admin\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutAYA\AyabankProfilePageConfigure;
use App\Models\AboutAYA\AyabankProfilePageCorproateInfo;
use App\Models\AboutAYA\AyabankProfilePageLeadingCapabilitiesInfo;
use App\Models\AboutAYA\AyabankProfileBusinessPractices;
use App\Models\AboutAYA\AyabankProfileShareholdingInfo;
use App\Models\AboutAYA\AyabankProfileShareholdingInfoTable;
use App\Models\AboutAYA\AyabankProfileMissionCorporate;
use DB;

class AYABankProfileController extends Controller
{
    public function pageAYAbankProfile()
    {
        return view('admin.page.about-aya.profile.ayabank-profile');
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
                        'banner_title' => $banner_tagline,
                        'updated_by' => auth()->user()->id
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
                        'second_text' => $second_text,
                        'updated_by' => auth()->user()->id
                    ]);
                    
        return redirect('admin/pagelist/about-aya/ayabank-profile');
    }

    public function ayabankProfileCorporateInfoUpdate(Request $request)
    {
        $corporate_info_count = $request->corporate_info_count;
        $corporate_info_title = $request->corporate_info_title;

        $banner = DB::table('ayabank_profile_page_configures')
                    ->update([
                        'corporate_info_title' => $corporate_info_title,
                        'updated_by' => auth()->user()->id
                    ]);

        for ($i=1; $i <= $corporate_info_count; $i++) { 
            $CIS_id = $request->input('CIS_id_'.$i);
            $CIS_title = $request->input('CIS_title_'.$i);
            $CIS_title_MM = $request->input('CIS_title_MM_'.$i);
            $CIS_desc = $request->input('CIS_desc_'.$i);
            $CIS_desc_MM = $request->input('CIS_desc_MM_'.$i);
            $CIS_img_old = $request->input('CIS_img_old_'.$i);

            if ($CIS_img_old == '') {
                if ($request->hasFile('CIS_img_'.$i)) {
                    $CIS_img = $request->file('CIS_img_'.$i);
                    $file = $CIS_img->getClientOriginalName();
                    $upload_path = base_path() . '/page_images/about-aya/ayabank-profile/';
                    $CIS_img->move($upload_path, $file);
                    $CIS_img_URL = "page_images/about-aya/ayabank-profile/" . $file;
                } else {
                    $CIS_img_URL = '';
                }
            } else {
                $CIS_img_URL = $request->input('CIS_img_old_'.$i);
            }

            $CI = DB::table('ayabank_profile_page_corproate_infos')
                            ->where('id', $CIS_id)
                            ->update([
                                'CIS_title' => $CIS_title,
                                'CIS_title_MM' => $CIS_title_MM,
                                'CIS_desc' => $CIS_desc,
                                'CIS_desc_MM' => $CIS_desc_MM,
                                'CIS_img' => $CIS_img_URL,
                                'updated_by' => auth()->user()->id
                            ]);
        }

        return redirect('admin/pagelist/about-aya/ayabank-profile');
    }

    public function ayabankProfileLeadingInfoUpdate(Request $request)
    {
        $leading_count = $request->leading_count;
        $leading_title = $request->leading_title;
        $update_leading_at = $request->update_leading_at;

        $banner = DB::table('ayabank_profile_page_configures')
                    ->update([
                        'leading_capabilities_title' => $leading_title,
                        'update_leading_at' => $update_leading_at
                    ]);

        for ($i=1; $i <= $leading_count; $i++) {
            $leading_id = $request->input('leading_id_'.$i);
            $leading_number = $request->input('leading_number_'.$i);
            $leading_postfix = $request->input('leading_postfix_'.$i);
            $leading_prefix = $request->input('leading_prefix_'.$i);
            $leading_label = $request->input('leading_label_'.$i);

            $leading = DB::table('ayabank_profile_page_leading_capabilities_infos')
                            ->where('id', $leading_id)
                            ->update([
                                'leading_number' => $leading_number,
                                'leading_postfix' => $leading_postfix,
                                'leading_prefix' => $leading_prefix,
                                'leading_label' => $leading_label,
                                'updated_by' => auth()->user()->id
                            ]);
        }

        return redirect('admin/pagelist/about-aya/ayabank-profile');
    }

    public function ayabankProfileCTA1Update(Request $request)
    {
        $cta_section_1_title = htmlentities($request->cta_section_1_title);
        $cta_section_1_desc = $request->cta_section_1_desc;
        $cta_section_1_link = $request->cta_section_1_link;

        if($request->cta_section_1_img_old == '') {
            if ($request->hasFile('cta_section_1_img')) {
                $imageBreak = $request->file('cta_section_1_img');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/ayabank-profile/';
                $imageBreak->move($upload_path, $file);
                $cta_section_1_img = "page_images/about-aya/ayabank-profile/" . $file;
            } else {
                $cta_section_1_img = '';
            }
        } else {
            $cta_section_1_img = $request->cta_section_1_img_old;
        }

        $CTA_1 = DB::table('ayabank_profile_page_configures')
                    ->update([
                        'cta_section_1_title' => $cta_section_1_title,
                        'cta_section_1_img' => $cta_section_1_img,
                        'cta_section_1_desc' => $cta_section_1_desc,
                        'cta_section_1_link' => $cta_section_1_link,
                        'updated_by' => auth()->user()->id
                    ]);

        return redirect('admin/pagelist/about-aya/ayabank-profile');
    }

    public function ayabankProfileCTA2Update(Request $request)
    {
        $cta_section_2_title = htmlentities($request->cta_section_2_title);
        $cta_section_2_desc = $request->cta_section_2_desc;
        $cta_section_2_link = $request->cta_section_2_link;

        if($request->cta_section_2_img_old == '') {
            if ($request->hasFile('cta_section_2_img')) {
                $imageBreak = $request->file('cta_section_2_img');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/ayabank-profile/';
                $imageBreak->move($upload_path, $file);
                $cta_section_2_img = "page_images/about-aya/ayabank-profile/" . $file;
            } else {
                $cta_section_2_img = '';
            }
        } else {
            $cta_section_2_img = $request->cta_section_2_img_old;
        }

        $CTA_1 = DB::table('ayabank_profile_page_configures')
                    ->update([
                        'cta_section_2_title' => $cta_section_2_title,
                        'cta_section_2_img' => $cta_section_2_img,
                        'cta_section_2_desc' => $cta_section_2_desc,
                        'cta_section_2_link' => $cta_section_2_link,
                        'updated_by' => auth()->user()->id
                    ]);

        return redirect('admin/pagelist/about-aya/ayabank-profile');
    }

    public function ayabankProfileCTA3Update(Request $request)
    {
        $cta_section_3_title = htmlentities($request->cta_section_3_title);
        $cta_section_3_desc = $request->cta_section_3_desc;
        $cta_section_3_link = $request->cta_section_3_link;

        if($request->cta_section_3_img_old == '') {
            if ($request->hasFile('cta_section_3_img')) {
                $imageBreak = $request->file('cta_section_3_img');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/ayabank-profile/';
                $imageBreak->move($upload_path, $file);
                $cta_section_3_img = "page_images/about-aya/ayabank-profile/" . $file;
            } else {
                $cta_section_3_img = '';
            }
        } else {
            $cta_section_3_img = $request->cta_section_3_img_old;
        }

        $CTA_1 = DB::table('ayabank_profile_page_configures')
                    ->update([
                        'cta_section_3_title' => $cta_section_3_title,
                        'cta_section_3_img' => $cta_section_3_img,
                        'cta_section_3_desc' => $cta_section_3_desc,
                        'cta_section_3_link' => $cta_section_3_link,
                        'updated_by' => auth()->user()->id
                    ]);

        return redirect('admin/pagelist/about-aya/ayabank-profile');
    }

    public function pageAYAbankProfileBusinessPractices(Request $request)
    {
        return view('admin.page.about-aya.profile.business-practices');
    }

    public function pageAYAbankProfileBusinessPracticesSection1Update(Request $request)
    {
        $page_title = $request->page_title;
        $first_desc = $request->first_desc;

        $banner = DB::table('ayabank_profile_business_practices')
                    ->update([
                        'page_title' => $page_title,
                        'first_desc' => $first_desc,
                        'updated_by' => auth()->user()->id
                    ]);

        return redirect('admin/pagelist/about-aya/ayabank-profile/business_practices');
    }

    public function pageAYAbankProfileBusinessPracticesCTA1Update(Request $request)
    {
        $cta_section_1_title = $request->cta_section_1_title;
        $cta_section_1_img_old = $request->cta_section_1_img_old;
        $cta_section_1_desc = $request->cta_section_1_desc;

        if($request->cta_section_1_img_old == '') {
            if ($request->hasFile('cta_section_1_img')) {
                $imageBreak = $request->file('cta_section_1_img');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/ayabank-profile/business-practices/';
                $imageBreak->move($upload_path, $file);
                $cta_section_1_img = "page_images/about-aya/ayabank-profile/business-practices/" . $file;
            } else {
                $cta_section_1_img = '';
            }
        } else {
            $cta_section_1_img = $request->cta_section_1_img_old;
        }

        $banner = DB::table('ayabank_profile_business_practices')
                    ->update([
                        'cta_section_1_title' => $cta_section_1_title,
                        'cta_section_1_img' => $cta_section_1_img,
                        'cta_section_1_desc' => $cta_section_1_desc,
                        'updated_by' => auth()->user()->id
                    ]);

        return redirect('admin/pagelist/about-aya/ayabank-profile/business_practices');
    }

    public function pageAYAbankProfileBusinessPracticesCTA2Update(Request $request)
    {
        $cta_section_2_title = $request->cta_section_2_title;
        $cta_section_2_img_old = $request->cta_section_2_img_old;
        $cta_section_2_desc = $request->cta_section_2_desc;

        if($request->cta_section_2_img_old == '') {
            if ($request->hasFile('cta_section_2_img')) {
                $imageBreak = $request->file('cta_section_2_img');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/ayabank-profile/business-practices/';
                $imageBreak->move($upload_path, $file);
                $cta_section_2_img = "page_images/about-aya/ayabank-profile/business-practices/" . $file;
            } else {
                $cta_section_2_img = '';
            }
        } else {
            $cta_section_2_img = $request->cta_section_2_img_old;
        }

        $banner = DB::table('ayabank_profile_business_practices')
                    ->update([
                        'cta_section_2_title' => $cta_section_2_title,
                        'cta_section_2_img' => $cta_section_2_img,
                        'cta_section_2_desc' => $cta_section_2_desc,
                        'updated_by' => auth()->user()->id
                    ]);

        return redirect('admin/pagelist/about-aya/ayabank-profile/business_practices');
    }

    public function pageAYAbankProfileBusinessPracticesCTA3Update(Request $request)
    {
        $cta_section_3_title = $request->cta_section_3_title;
        $cta_section_3_img_old = $request->cta_section_3_img_old;
        $cta_section_3_desc = $request->cta_section_3_desc;

        if($request->cta_section_3_img_old == '') {
            if ($request->hasFile('cta_section_3_img')) {
                $imageBreak = $request->file('cta_section_3_img');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/ayabank-profile/business-practices/';
                $imageBreak->move($upload_path, $file);
                $cta_section_3_img = "page_images/about-aya/ayabank-profile/business-practices/" . $file;
            } else {
                $cta_section_3_img = '';
            }
        } else {
            $cta_section_3_img = $request->cta_section_3_img_old;
        }

        $banner = DB::table('ayabank_profile_business_practices')
                    ->update([
                        'cta_section_3_title' => $cta_section_3_title,
                        'cta_section_3_img' => $cta_section_3_img,
                        'cta_section_3_desc' => $cta_section_3_desc,
                        'updated_by' => auth()->user()->id
                    ]);

        return redirect('admin/pagelist/about-aya/ayabank-profile/business_practices');
    }

    public function pageAYAbankProfileBusinessPracticesCTA4Update(Request $request)
    {
        $cta_section_4_title = $request->cta_section_4_title;
        $cta_section_4_img_old = $request->cta_section_4_img_old;
        $cta_section_4_desc = $request->cta_section_4_desc;

        if($request->cta_section_4_img_old == '') {
            if ($request->hasFile('cta_section_4_img')) {
                $imageBreak = $request->file('cta_section_4_img');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/ayabank-profile/business-practices/';
                $imageBreak->move($upload_path, $file);
                $cta_section_4_img = "page_images/about-aya/ayabank-profile/business-practices/" . $file;
            } else {
                $cta_section_4_img = '';
            }
        } else {
            $cta_section_4_img = $request->cta_section_4_img_old;
        }

        $banner = DB::table('ayabank_profile_business_practices')
                    ->update([
                        'cta_section_4_title' => $cta_section_4_title,
                        'cta_section_4_img' => $cta_section_4_img,
                        'cta_section_4_desc' => $cta_section_4_desc,
                        'updated_by' => auth()->user()->id
                    ]);

        return redirect('admin/pagelist/about-aya/ayabank-profile/business_practices');
    }

    public function pageAYAbankProfileShareholdingInfo(Request $request)
    {
        return view('admin.page.about-aya.profile.shareholding-info');
    }

    public function pageAYAbankProfileShareholdingInfoSection1Update(Request $request)
    {
        $page_title = $request->page_title;
        $first_desc = $request->first_desc;

        $banner = DB::table('ayabank_profile_shareholding_infos')
                    ->update([
                        'page_title' => $page_title,
                        'first_desc' => $first_desc,
                        'updated_by' => auth()->user()->id
                    ]);

        return redirect('admin/pagelist/about-aya/ayabank-profile/shareholding_info');
    }

    public function pageAYAbankProfileShareholdingInfoTableUpdate(Request $request)
    {
        $holding_table_count = $request->holding_table_count;

        for ($i=1; $i <= $holding_table_count; $i++) { 
            $shareholding_table_id = $request->input('shareholding_table_id_'.$i);
            $shareholding_name = $request->input('shareholding_name_'.$i);
            if($request->input('shareholding_board_'.$i) == 'on') {
                $shareholding_board = '0';
            } else {
                $shareholding_board = '1';
            }
            $shareholding_percent = $request->input('shareholding_percent_'.$i);

            $CI = DB::table('ayabank_profile_shareholding_info_tables')
                            ->where('id', $shareholding_table_id)
                            ->update([
                                'shareholding_name' => $shareholding_name,
                                'shareholding_board' => $shareholding_board,
                                'shareholding_percent' => $shareholding_percent,
                                'updated_by' => auth()->user()->id
                            ]);
        }

        return redirect('admin/pagelist/about-aya/ayabank-profile/shareholding_info');
    }
    public function pageAYAbankProfileMissionCorporate(Request $request)
    {
        return view ('admin.page.about-aya.mission-corporate.mission-corporate-value-brand-promise');
    }
}
