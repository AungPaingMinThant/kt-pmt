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

    public function savingDepositIndex()
    {
        return view('business.account-saving.saving-deposit');
    }

    public function currentDepositIndex()
    {
        return view('business.account-saving.current-deposit');   
    }

    public function fixedDepositIndex()
    {
        return view('business.account-saving.fixed-deposit');  
    }
}
