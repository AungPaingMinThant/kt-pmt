<?php

namespace App\Http\Controllers\Admin\AboutAYA;

use App\Http\Controllers\Controller;
use App\Models\AwardsDesc;
use Illuminate\Http\Request;
use URL;
Use DB;

class AwardsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }
    public function pageAwards() {
        return view ('admin.page.about-aya.awards.index');
    }

    public function descAwards(Request $request) {
        $award_desc = $request->award_desc;

        $banner = DB::table('award_descs')
                    ->update ([
                        'award_desc' => $award_desc,
                        'updated_by' => auth()->user()->id
                    ]);
            return redirect('admin/pagelist/about-aya/awards');
    } 
}
