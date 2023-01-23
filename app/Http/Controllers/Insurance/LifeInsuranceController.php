<?php

namespace App\Http\Controllers\Insurance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LifeInsuranceController extends Controller
{
    public function universalIndex()
    {
        return view('insurance.life.universal');
    }

    public function educationIndex()
    {
        return view('insurance.life.education');
    }

    public function oneHealthIndex()
    {
        return view('insurance.life.one-health');
    }

    public function shorttermIndex()
    {
        return view('insurance.life.short-term');
    }   
}
