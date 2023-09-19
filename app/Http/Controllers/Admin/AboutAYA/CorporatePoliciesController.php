<?php

namespace App\Http\Controllers\Admin\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CorporatePoliciesController extends Controller
{
    public function pageCorporatePolicies($value='')
    {
        return view('admin.page.about-aya.corporate-policies.index');
    }
}
