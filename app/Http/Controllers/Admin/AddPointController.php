<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use DB;

class AddPointController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function addPoint()
    {
        return view('admin.addpoints.list');
    }
}



