<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\Enquiry;
use App\Models\EnquiryRecord;

class EnquiryStoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function enquirySave(Request $request)
    {
        $name_txt = $request->name_txt;
        $phone_txt = $request->phone_txt;
        $email_txt = $request->email_txt;
        $division_select = $request->division_select;
        $company_txt = $request->company_txt;
        $product_check = $request->product_check;
        $sub_prod_check = implode(", ", $request->sub_prod_check);
        $comment_question_txt = $request->comment_question_txt;

        $enquiry_rec = new EnquiryRecord();
        $enquiry_rec->name_txt = $name_txt;
        $enquiry_rec->phone_txt = $phone_txt;
        $enquiry_rec->email_txt = $email_txt;
        $enquiry_rec->division_select = $division_select;
        $enquiry_rec->company_txt = $company_txt;
        $enquiry_rec->product_check = $product_check;
        $enquiry_rec->sub_prod_check = $sub_prod_check;
        $enquiry_rec->comment_question_txt = $comment_question_txt;
        $enquiry_rec->save();


        // $data = array('name_txt'=>$name_txt, 'phone_txt'=>$phone_txt, 'email_txt'=>$email_txt, 'division_select'=>$division_select, 'product_check'=>$product_check, 'sub_prod_check'=>$sub_prod_check, 'comment_question_txt'=>$comment_question_txt);

        // businessloan@ayabank.com
        // tbtradeaya@ayabank.com
        // tbcmsaya@ayabank.com
        // tbcibaya@ayabank.com

        // if ($product_check == 'Loan') {
        //     if ($sub_prod_check == 'Capex Financing' || $sub_prod_check == 'Working Capital Financing' || $sub_prod_check == 'Demand Financing' || $sub_prod_check == 'Project Loan / Tender Contract Loan'  || $sub_prod_check == 'Franchise Financing' || $sub_prod_check == 'Trade Financing') {
        //         Mail::to('businessloan@ayabank.com')->cc('maykhaing@saltnpixel.com')->send(new Enquiry($name_txt, $phone_txt, $email_txt, $division_select, $company_txt, $product_check, $sub_prod_check, $comment_question_txt));
        //     }
        // }

        // if ($product_check == 'Trade') {
        //     if ($sub_prod_check == 'Import Services' || $sub_prod_check == 'Export Services' || $sub_prod_check == 'Other Services') {
        //         Mail::to('tradebusiness@ayabank.com')->cc('maykhaing@saltnpixel.com')->send(new Enquiry($name_txt, $phone_txt, $email_txt, $division_select, $company_txt, $product_check, $sub_prod_check, $comment_question_txt));
        //     }
        // }

        // if ($product_check == 'CMS') {
        //     if ($sub_prod_check == 'Payroll Service' || $sub_prod_check == 'Collection Service' || $sub_prod_check == 'Payment Service') {
        //         Mail::to('cms@ayabank.com')->cc('maykhaing@saltnpixel.com')->send(new Enquiry($name_txt, $phone_txt, $email_txt, $division_select, $company_txt, $product_check, $sub_prod_check, $comment_question_txt));
        //     }
        // }

        // if ($product_check == 'Digital Banking') {
        //     if ($sub_prod_check == 'Corporate Internet Banking') {
        //         Mail::to('cibbanking@ayabank.com')->cc('maykhaing@saltnpixel.com')->send(new Enquiry($name_txt, $phone_txt, $email_txt, $division_select, $company_txt, $product_check, $sub_prod_check, $comment_question_txt));
        //     }
        // }

        return redirect(url()->previous().'#success')->with('success', "Your request was successfully sent! We'll reach you soon!");
    }
}
