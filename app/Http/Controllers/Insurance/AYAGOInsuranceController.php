<?php

namespace App\Http\Controllers\Insurance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AYAGOInsuranceController extends Controller
{
    public function index()
    {
        return view('insurance.aya-go');
    }
}
