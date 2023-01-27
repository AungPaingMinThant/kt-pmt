<?php

namespace App\Http\Controllers\AccountSaving;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CallDepositController extends Controller
{
    public function index()
    {
        return view('account-saving.call-deposit.index');
    }

    public function premiumIndex()
    {
        return view('account-saving.call-deposit.premium-call-deposit');
    }

    public function newBusinessCallIndex()
    {
        return view('account-saving.call-deposit.new-business-call');
    }
}
