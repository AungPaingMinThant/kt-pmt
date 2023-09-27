<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQ;
use App\Models\PageListing;
use DB;

class FAQController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function FAQList()
    {
        return view('admin.faq.list');
    }
    
    public function FAQAdd($value='')
    {
        return view('admin.faq.add');
    }

    public function FAQStore(Request $request)
    {
        $page_slug = $request->page_slug;
        $faq_question = $request->faq_question;
        $faq_answer = $request->faq_answer;

        $faq = new FAQ();
        $faq->page_slug = $page_slug;
        $faq->faq_question = htmlentities($faq_question);
        $faq->faq_answer = htmlentities($faq_answer);
        $faq->created_by = auth()->user()->is;
        $faq->updated_by = auth()->user()->is;
        $faq->faq_delete_flg = '0';
        $faq->save();

        return redirect('/admin/faq/list')->with('FAQ successfully created.');
    }

    public function FAQListByPageSlug($page_slug)
    {
        $faq_list = FAQ::where('page_slug', $page_slug)->get();

        return view('admin.faq.page-slug-list')->with('faq_list', $faq_list)
                                                ->with('page_slug',$page_slug);
    }

    public function FAQEdit($faq_id)
    {
        $faq_data = FAQ::where('id', $faq_id)->first();

        return view('admin.faq.edit')->with('faq_data', $faq_data);
    }

    public function FAQUpdate(Request $request)
    {
        // code...
    }
}


