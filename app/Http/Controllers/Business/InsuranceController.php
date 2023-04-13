<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    public function domesticMarineCargoIndex()
    {
        return view('business.insurance.dosmetic-marine-cargo');
    }

    public function overseaMarineCargoIndex()
    {
        return view('business.insurance.oversea-marine-cargo');
    }

    public function domesticInlandTransitIndex()
    {
        return view('business.insurance.domestic-inland-transit');
    }
}
