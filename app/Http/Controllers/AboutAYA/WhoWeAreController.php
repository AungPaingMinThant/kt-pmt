<?php

namespace App\Http\Controllers\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WhoWeAreController extends Controller
{
    public function meetOurLeadersIndex($value='')
    {
        return view('about-aya.meet-our-leaders.index');
    }
}
