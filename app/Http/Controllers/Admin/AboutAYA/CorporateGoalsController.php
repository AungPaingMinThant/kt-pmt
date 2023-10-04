<?php

namespace App\Http\Controllers\Admin\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutAYA\CorporateGoals;
class CorporateGoalsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }
    public function pageCorporateGoals() {
        return view ('admin.page.about-aya.corporate-goals.index');
    }
}
