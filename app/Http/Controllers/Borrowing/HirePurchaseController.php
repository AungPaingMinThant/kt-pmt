<?php

namespace App\Http\Controllers\Borrowing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HirePurchaseController extends Controller
{
    public function autoLoanIndex()
    {
        return view('borrowing.hire-purchcase.auto-loan');
    }

    public function C2CAutoLoanIndex()
    {
        return view('borrowing.hire-purchcase.c2c-auto-loan');
    }

    public function educationLoanIndex()
    {
        return view('borrowing.hire-purchcase.education-loan');
    }

    public function constructionLoanIndex()
    {
        return view('borrowing.hire-purchcase.construction-loan');
    }

    public function homeLoanIndex()
    {
        return view('borrowing.hire-purchcase.home-loan');
    }
}
