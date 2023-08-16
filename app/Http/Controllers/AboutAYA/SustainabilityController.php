<?php

namespace App\Http\Controllers\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SustainabilityController extends Controller
{
    public function sustainabilityIndex()
    {
        return view('about-aya.sustainability.sustainability-index');
    }

    public function socialSustainabilityIndex()
    {
        return view('about-aya.sustainability.social-sustainability');
    }

    public function environmentalSustainabilityIndex()
    {
        return view('about-aya.sustainability.environmental-sustainability');
    }

    public function economicSustainabilityIndex()
    {
        return view('about-aya.sustainability.economic-sustainability');
    }

    public function UNGCIndex()
    {
        return view('about-aya.sustainability.ungc-compliance');
    }
}
