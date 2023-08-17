<?php

namespace App\Http\Controllers\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function careerOpportunitiesIndex()
    {
        return view('about-aya.career.career-opportunities');
    }

    public function ayaCultureIndex()
    {
        return view('about-aya.career.aya-culture');
    }

    public function lifeAtAYAIndex()
    {
        return view('about-aya.career.life-at-aya');
    }
}
