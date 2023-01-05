<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SMSAlertController extends Controller
{
    public function index()
    {
        return view('smsalert.index');
    }
}
