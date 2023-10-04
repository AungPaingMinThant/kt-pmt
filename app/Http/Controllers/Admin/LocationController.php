<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function __construct() {

        $this->middleware('auth.admin');
    
    }
    
    public function location() {
        
        return view('admin.location.list');
    }
}