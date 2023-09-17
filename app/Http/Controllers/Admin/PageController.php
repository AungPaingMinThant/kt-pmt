<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutAYA\AyabankProfilePageConfigure;
use App\Models\AboutAYA\AyabankProfilePageCorproateInfo;
use DB;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function pageList()
    {
        return view('admin.page.main');
    }

    public function pageAboutAYAList()
    {
        return view('admin.page.about-aya.list');
    }

    
}
