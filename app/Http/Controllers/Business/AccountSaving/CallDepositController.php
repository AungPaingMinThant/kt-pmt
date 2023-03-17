<?php

namespace App\Http\Controllers\Business\AccountSaving;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CallDepositController extends Controller
{
    public function callDepositIndex()
    {
        return view('business.account-saving.call-deposit');
    }
}
