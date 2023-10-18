<?php

namespace App\Http\Controllers\Admin\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutAYA\CorporateGoals;
use DB;
use URL;
class CorporateGoalsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }
    public function pageCorporateGoals() {
        return view ('admin.page.about-aya.corporate-goals.index');
    }
// descriptionUpdate
    public function descriptionUpdate(Request $request)
    {
        $corporate_goal_desc = $request->corporate_goal_desc;
        $corporate_goal_img_1_old = $request->corporate_goal_img_1_old;
        $corporate_goal_img_1 = $request->corporate_goal_img_1;
        $corporate_text_1 = $request->corporate_text_1;
        $corporate_goal_img_2_old = $request->corporate_goal_img_2_old;
        $corporate_goal_img_2 = $request->corporate_goal_img_2;
        $corporate_text_2 = $request->corporate_text_2;
        $corporate_goal_img_3_old = $request->corporate_goal_img_3_old;
        $corporate_goal_img_3 = $request->corporate_goal_img_3;
        $corporate_text_3 = $request->corporate_text_3;
        $corporate_goal_img_4_old = $request->corporate_goal_img_4_old;
        $corporate_goal_img_4 = $request->corporate_goal_img_4;
        $corporate_text_4 = $request->corporate_text_4;

        if ($request->corporate_goal_img_1_old == '') {
            if ($request->hasFile('corporate_goal_img_1')) {
                $imageBreak = $request->file('corporate_goal_img_1');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/who-we-are/corporate-profile/corporate-goals/';
                $imageBreak->move($upload_path, $file);
                $corporate_goal_img_1_path = "page_images/about-aya/who-we-are/corporate-profile/corporate-goals/" . $file;
            } else {
                $corporate_goal_img_1_path = $request->corporate_goal_img_1_old;
            }
        } else {
            $corporate_goal_img_1_path = $request->corporate_goal_img_1_old;
        }

        if ($request->corporate_goal_img_2_old == '') {
            if ($request->hasFile('corporate_goal_img_2')) {
                $imageBreak = $request->file('corporate_goal_img_2');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/who-we-are/corporate-profile/corporate-goals/';
                $imageBreak->move($upload_path, $file);
                $corporate_goal_img_2_path = "page_images/about-aya/who-we-are/corporate-profile/corporate-goals/" . $file;
            } else {
                $corporate_goal_img_2_path = $request->corporate_goal_img_2_old;
            }
        } else {
            $corporate_goal_img_2_path = $request->corporate_goal_img_2_old;
        }

        if ($request->corporate_goal_img_3_old == '') {
            if ($request->hasFile('corporate_goal_img_3')) {
                $imageBreak = $request->file('corporate_goal_img_3');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/who-we-are/corporate-profile/corporate-goals/';
                $imageBreak->move($upload_path, $file);
                $corporate_goal_img_3_path = "page_images/about-aya/who-we-are/corporate-profile/corporate-goals/" . $file;
            } else {
                $corporate_goal_img_3_path = $request->corporate_goal_img_3_old;
            }
        } else {
            $corporate_goal_img_3_path = $request->corporate_goal_img_3_old;
        }

        if ($request->corporate_goal_img_4_old == '') {
            if ($request->hasFile('corporate_goal_img_4')) {
                $imageBreak = $request->file('corporate_goal_img_4');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/ayabank-profile/corporate-goals/';
                $imageBreak->move($upload_path, $file);
                $corporate_goal_img_4_path = "page_images/about-aya/ayabank-profile/corporate-goals/" . $file;
            } else {
                $corporate_goal_img_4_path = $request->corporate_goal_img_4_old;
            }
        } else {
            $corporate_goal_img_4_path = $request->corporate_goal_img_4_old;
        }
        
        $banner = DB::table('corporate_goals')
                    ->update ([
                        'corporate_goal_desc' => $corporate_goal_desc,
                        'corporate_goal_img_1' => $corporate_goal_img_1_path,
                        'corporate_goal_img_2' => $corporate_goal_img_2_path,
                        'corporate_goal_img_3' => $corporate_goal_img_3_path,
                        'corporate_goal_img_4' => $corporate_goal_img_4_path,   
                        'corporate_text_1' => $corporate_text_1,
                        'corporate_text_2' => $corporate_text_2,
                        'corporate_text_3' => $corporate_text_3,
                        'corporate_text_4' => $corporate_text_4,
                        'updated_by' => auth()->user()->id

                    ]);
        return redirect('admin/pagelist/about-aya/corporate-goals');

    }

// Customer
    public function customerUpdate(Request $request)
    {
        $customer_title = $request->customer_title;
        $customer_desc = $request->customer_desc;
        $customer_list = $request->customer_list;
        $customer_card_desc_1 = $request->customer_card_desc_1;
        $customer_card_desc_2 = $request->customer_card_desc_2;
        $customer_card_text_1 = $request->customer_card_text_1;
        $customer_card_text_2 = $request->customer_card_text_2;
        $customer_card_link_1 = $request->customer_card_link_1;
        $customer_card_link_2 = $request->customer_card_link_2;
        $customer_card_img_1_old = $request->customer_card_img_1_old;
        $customer_card_img_1 = $request->customer_card_img_1;
        $customer_card_img_2_old = $request->customer_card_img_2_old;
        $customer_card_img_2 = $request->customer_card_img_2;
        
        if ($request->customer_card_img_1_old == '') {
            if ($request->hasFile('customer_card_img_1')) {
                $imageBreak = $request->file('customer_card_img_1');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/who-we-are/corporate-profile/corporate-goals/';
                $imageBreak->move($upload_path, $file);
                $customer_card_img_1_path = "page_images/about-aya/who-we-are/corporate-profile/corporate-goals/" . $file;
            } else {
                $customer_card_img_1_path = '';
            }
        } else {
            $customer_card_img_1_path = $request->customer_card_img_1_old;
        }

        if ($request->customer_card_img_2_old == '') {
            if ($request->hasFile('customer_card_img_2')) {
                $imageBreak = $request->file('customer_card_img_2');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/who-we-are/corporate-profile/corporate-goals/';
                $imageBreak->move($upload_path, $file);
                $customer_card_img_2_path = "page_images/about-aya/who-we-are/corporate-profile/corporate-goals/" . $file;
            } else {
                $customer_card_img_2_path = '';
            }
        } else {
            $customer_card_img_2_path = $request->customer_card_img_2_old;
        }

        $banner = DB::table('corporate_goals')
                    ->update ([
                        'customer_title' => $customer_title,
                        'customer_desc' => $customer_desc,
                        'customer_list' => $customer_list,
                        'customer_card_desc_1' => $customer_card_desc_1,
                        'customer_card_desc_2' => $customer_card_desc_2,
                        'customer_card_text_1' => $customer_card_text_1,
                        'customer_card_text_2' => $customer_card_text_2,
                        'customer_card_link_1' => $customer_card_link_1,
                        'customer_card_link_2' => $customer_card_link_2,
                        'customer_card_img_1' => $customer_card_img_1_path,
                        'customer_card_img_2' => $customer_card_img_2_path,
                        'updated_by' => auth()->user()->id
                    ]);
                    
        return redirect('admin/pagelist/about-aya/corporate-goals');
    }


// Community
    public function communityUpdate(Request $request)
    {
        $community_title = $request->community_title;
        $community_desc = $request->community_desc;
        $community_card_desc_1 = $request->community_card_desc_1;
        $community_card_desc_2 = $request->community_card_desc_2;
        $community_card_text_1 = $request->community_card_text_1;
        $community_card_text_2 = $request->community_card_text_2;
        $community_card_link_1 = $request->community_card_link_1;
        $community_card_link_2 = $request->community_card_link_2;
        $community_card_img_1_old = $request->community_card_img_1_old;
        $community_card_img_1 = $request->community_card_img_1;
        $community_card_img_2_old = $request->community_card_img_2_old;
        $community_card_img_2 = $request->community_card_img_2;

        if ($request->community_card_img_1_old == '') {
            if ($request->hasFile('community_card_img_1')) {
                $imageBreak = $request->file('community_card_img_1');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/who-we-are/corporate-profile/corporate-goals/';
                $imageBreak->move($upload_path, $file);
                $community_card_img_1_path = "page_images/about-aya/who-we-are/corporate-profile/corporate-goals/" . $file;
            } else {
                $community_card_img_1_path = '';
            }
        } else {
            $community_card_img_1_path = $request->community_card_img_1_old;
        }

        if ($request->community_card_img_2_old == '') {
            if ($request->hasFile('community_card_img_2')) {
                $imageBreak = $request->file('community_card_img_2');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/who-we-are/corporate-profile/corporate-goals/';
                $imageBreak->move($upload_path, $file);
                $community_card_img_2_path = "page_images/about-aya/who-we-are/corporate-profile/corporate-goals/" . $file;
            } else {
                $community_card_img_2_path = '';
            }
        } else {
            $community_card_img_2_path = $request->community_card_img_2_old;
        }

        $banner = DB::table('corporate_goals')
                    ->update ([
                        'community_title' => $community_title,
                        'community_desc' => $community_desc,
                        'community_card_desc_1' => $community_card_desc_1,
                        'community_card_desc_2' => $community_card_desc_2,
                        'community_card_text_1' => $community_card_text_1,
                        'community_card_text_2' => $community_card_text_2,
                        'community_card_link_1' => $community_card_link_1,
                        'community_card_link_2' => $community_card_link_2,
                        'community_card_img_1' => $community_card_img_1_path,
                        'community_card_img_2' => $community_card_img_2_path,
                        'updated_by' => auth()->user()->id
                    ]);
            
        return redirect('admin/pagelist/about-aya/corporate-goals');
    }

// Staff
    public function staffUpdate(Request $request)
    {
        $staff_title = $request->staff_title;
        $staff_desc = $request->staff_desc;
        $staff_card_desc_1 = $request->staff_card_desc_1;
        $staff_card_desc_2 = $request->staff_card_desc_2;
        $staff_card_text_1 = $request->staff_card_text_1;
        $staff_card_text_2 = $request->staff_card_text_2;
        $staff_card_link_1 = $request->staff_card_link_1;
        $staff_card_link_2 = $request->staff_card_link_2;
        $staff_card_img_1_old = $request->staff_card_img_1_old;
        $staff_card_img_1 = $request->staff_card_img_1;
        $staff_card_img_2_old = $request->staff_card_img_2_old;
        $staff_card_img_2 = $request->staff_card_img_2;

        if ($request->staff_card_img_1_old == '') {
            if ($request->hasFile('staff_card_img_1')) {
                $imageBreak = $request->file('staff_card_img_1');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/who-we-are/corporate-profile/corporate-goals/';
                $imageBreak->move($upload_path, $file);
                $staff_card_img_1_path = "page_images/about-aya/who-we-are/corporate-profile/corporate-goals/" . $file;
            } else {
                $staff_card_img_1_path = '';
            }
        } else {
            $staff_card_img_1_path = $request->staff_card_img_1_old;
        }

        if ($request->staff_card_img_2_old == '') {
            if ($request->hasFile('staff_card_img_2')) {
                $imageBreak = $request->file('staff_card_img_2');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/who-we-are/corporate-profile/corporate-goals/';
                $imageBreak->move($upload_path, $file);
                $staff_card_img_2_path = "page_images/about-aya/who-we-are/corporate-profile/corporate-goals/" . $file;
            } else {
                $staff_card_img_2_path = '';
            }
        } else {
            $staff_card_img_2_path = $request->staff_card_img_2_old;
        }

        $banner = DB::table('corporate_goals')
                    ->update ([
                        'staff_title' => $staff_title,
                        'staff_desc' => $staff_desc,
                        'staff_card_desc_1' => $staff_card_desc_1,
                        'staff_card_desc_2' => $staff_card_desc_2,
                        'staff_card_text_1' => $staff_card_text_1,
                        'staff_card_text_2' => $staff_card_text_2,
                        'staff_card_link_1' => $staff_card_link_1,
                        'staff_card_link_2' => $staff_card_link_2,
                        'staff_card_img_1' => $staff_card_img_1_path,
                        'staff_card_img_2' => $staff_card_img_2_path,
                        'updated_by' => auth()->user()->id
                    ]);
            
        return redirect('admin/pagelist/about-aya/corporate-goals');
    }

// People
    public function peopleUpdate(Request $request)
    {
        $people_desc = $request->people_desc;

        $banner = DB::table('corporate_goals')
                ->update ([
                    'people_desc' => $people_desc,
                    'updated_by' => auth()->user()->id
                ]);
        return redirect('admin/pagelist/about-aya/corporate-goals');
    }

// Stakeholder
    public function stakeholderUpdate(Request $request) {
        $stakeholder_title = $request->stakeholder_title;
        $stakeholder_desc = $request->stakeholder_desc;
        $stakeholder_card_desc_1 = $request->stakeholder_card_desc_1;
        $stakeholder_card_desc_2 = $request->stakeholder_card_desc_2;
        $stakeholder_card_text_1 = $request->stakeholder_card_text_1;
        $stakeholder_card_text_2 = $request->stakeholder_card_text_2;
        $stakeholder_card_link_1 = $request->stakeholder_card_link_1;
        $stakeholder_card_link_2 = $request->stakeholder_card_link_2;
        $stakeholder_card_img_1_old = $request->stakeholder_card_img_1_old;
        $stakeholder_card_img_1 = $request->stakeholder_card_img_1;
        $stakeholder_card_img_2_old = $request->stakeholder_card_img_2_old;
        $stakeholder_card_img_2 = $request->stakeholder_card_img_2;

        if ($request->stakeholder_card_img_1_old == '') {
            if ($request->hasFile('stakeholder_card_img_1')) {
                $imageBreak = $request->file('stakeholder_card_img_1');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/who-we-are/corporate-profile/corporate-goals/';
                $imageBreak->move($upload_path, $file);
                $stakeholder_card_img_1_path = "page_images/about-aya/who-we-are/corporate-profile/corporate-goals/" . $file;
            } else {
                $stakeholder_card_img_1_path = '';
            }
        } else {
            $stakeholder_card_img_1_path = $request->stakeholder_card_img_1_old;
        }

        if ($request->stakeholder_card_img_2_old == '') {
            if ($request->hasFile('stakeholder_card_img_2')) {
                $imageBreak = $request->file('stakeholder_card_img_2');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/who-we-are/corporate-profile/corporate-goals/';
                $imageBreak->move($upload_path, $file);
                $stakeholder_card_img_2_path = "page_images/about-aya/who-we-are/corporate-profile/corporate-goals/" . $file;
            } else {
                $stakeholder_card_img_2_path = '';
            }
        } else {
            $stakeholder_card_img_2_path = $request->stakeholder_card_img_2_old;
        }
        
        $banner = DB::table ('corporate_goals')
                ->update ([
                    'stakeholder_title' => $stakeholder_title,
                    'stakeholder_desc' => $stakeholder_desc,
                    'stakeholder_card_desc_1' => $stakeholder_card_desc_1,
                    'stakeholder_card_desc_2' => $stakeholder_card_desc_2,
                    'stakeholder_card_text_1' => $stakeholder_card_text_1,
                    'stakeholder_card_text_2' => $stakeholder_card_text_2,
                    'stakeholder_card_link_1' => $stakeholder_card_link_1,
                    'stakeholder_card_link_2' => $stakeholder_card_link_2,
                    'stakeholder_card_img_1' => $stakeholder_card_img_1_path,
                    'stakeholder_card_img_2' => $stakeholder_card_img_2_path,
                    'updated_by' => auth()->user()->id
                ]);
                
            return redirect('admin/pagelist/about-aya/corporate-goals');
   
    }

}
