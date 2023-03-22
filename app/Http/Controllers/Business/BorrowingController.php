<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BorrowingController extends Controller
{
    public function corporateBusinessLoanIndex()
    {
        return view('business.borrowing.corporate-business-loan');
    }

    public function hirePurchaseIndex()
    {
        return view('business.borrowing.corporate-business-loan');
    }

    public function SMEIndex()
    {
        return view('business.borrowing.corporate-business-loan');
    }
}
