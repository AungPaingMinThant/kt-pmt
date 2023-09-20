<?php

namespace App\Http\Controllers\Admin\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutAYA\AyabankProfileMissionCorporate;

class CorporateMssionBrandValuesController extends Controller
{
    public function pageCorporateMissionBrandValues()
    {
        return view('admin.page.about-aya.mission-corporate.mission-corporate-value-promise');
    }

}
