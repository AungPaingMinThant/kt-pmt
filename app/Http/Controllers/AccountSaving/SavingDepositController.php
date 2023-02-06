<?php

namespace App\Http\Controllers\AccountSaving;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SavingDepositController extends Controller
{
    public function index()
    {
        return view('account-saving.saving-deposit.index');
    }

    public function regularSavingIndex()
    {
        return view('account-saving.saving-deposit.regular');
    }

    public function maximizerSavingIndex()
    {
        return view('account-saving.saving-deposit.maximzer');
    }

    public function loyalSavingIndex()
    {
        return view('account-saving.saving-deposit.loyal');
    }

    public function shweOindex()
    {
        return view('account-saving.saving-deposit.shwe-o');
    }

    public function suBuuIndex()
    {
        return view('account-saving.saving-deposit.su-buu');
    }
}
