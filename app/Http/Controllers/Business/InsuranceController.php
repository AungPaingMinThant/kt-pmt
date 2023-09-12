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

    public function CAREARIndex()
    {
        return view('business.insurance.car-ear');
    }

    public function IARIndex()
    {
        return view('business.insurance.IAR');
    }

    public function groupLifeIndex()
    {
        return view('business.insurance.group');
    }

    public function fireIndex()
    {
        return view('business.insurance.fire');
    }

    public function motorIndex()
    {
        return view('business.insurance.motor');
    }
}
