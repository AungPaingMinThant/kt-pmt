<?php

namespace App\Http\Controllers\Insurance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PAInsuranceController extends Controller
{
    public function index()
    {
        return view('insurance.pa');
    }
}
