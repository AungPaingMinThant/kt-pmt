<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function FAQList()
    {
        return view('admin.faq.list');
    }
    
    public function FAQAdd($value='')
    {
        return view('admin.faq.add');
    }
}
