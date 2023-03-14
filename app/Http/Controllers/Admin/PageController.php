<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function pageList()
    {
        return view('admin.page.list');
    }
}
