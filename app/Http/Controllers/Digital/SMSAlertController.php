<?php

namespace App\Http\Controllers\Digital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SMSAlertController extends Controller
{
    public function index()
    {
        return view('smsalert.index');
    }
}
