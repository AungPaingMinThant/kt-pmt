<?php

namespace App\Http\Controllers\AccountSaving;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurrentDepositController extends Controller
{
    public function index()
    {
        return view('account-saving.current-deposit.index');
    }

    public function RegularIndex()
    {
        return view('account-saving.current-deposit.regular');
    }

    public function newBusinessIndex()
    {
        return view('account-saving.current-deposit.new-business');
    }

    public function seafererIndex()
    {
        return view('account-saving.current-deposit.seaferer');
    }

    public function retailFCAIndex()
    {
        return view('account-saving.current-deposit.retail-FCA');
    }
}