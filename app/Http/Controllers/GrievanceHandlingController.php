<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrievanceHandlingController extends Controller
{
    public function index()
    {
        return view('grievance-handling.index');
    }
}
