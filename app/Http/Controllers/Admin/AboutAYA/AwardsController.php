<?php

namespace App\Http\Controllers\Admin\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AwardsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }
    public function pageAwards() {
        return view ('admin.page.about-aya.awards.index');
    }
}
