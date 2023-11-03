<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQ;
use App\Models\PageListing;
use DB;

class ExportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function FAQList()
    {
        return view('admin.export.list');
    }
    
    public function FAQAdd($value='')
    {
        return view('admin.export.add');
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
        $faq->created_by = auth()->user()->id;
        $faq->updated_by = auth()->user()->id;
        $faq->faq_delete_flg = '0';
        $faq->save();

        return redirect()->back()->with('FAQ successfully created.');
    }

    public function FAQListByPageSlug($page_slug)
    {
        $faq_list = FAQ::where('page_slug', $page_slug)->get();

        return view('admin.faq.page-slug-list')->with('faq_list', $faq_list)
                                                ->with('page_slug',$page_slug);
    }

    public function FAQAddPageSlug($page_slug)
    {
        return view('admin.faq.add-with-page-slug')->with('page_slug',$page_slug);
    }

    public function FAQStorePageSlug(Request $request)
    {
        $page_slug = $request->page_slug;
        $faq_question = $request->faq_question;
        $faq_answer = $request->faq_answer;

        $faq = new FAQ();
        $faq->page_slug = $page_slug;
        $faq->faq_question = htmlentities($faq_question);
        $faq->faq_answer = htmlentities($faq_answer);
        $faq->created_by = auth()->user()->id;
        $faq->updated_by = auth()->user()->id;
        $faq->faq_delete_flg = '0';
        $faq->save();

        return redirect('/admin/faq/'.$page_slug.'/list');
    }

    public function FAQEdit($faq_id)
    {
        $faq_data = FAQ::where('id', $faq_id)->first();

        return view('admin.faq.edit')->with('faq_data', $faq_data);
    }

    public function FAQUpdate(Request $request)
    {
        $page_slug = $request->page_slug;
        $faq_id = $request->faq_id;
        $faq_question = $request->faq_question;
        $faq_answer = $request->faq_answer;

        $banner = DB::table('f_a_q_s')
                    ->where('id',$faq_id)
                    ->update([
                        'page_slug' => $page_slug,
                        'faq_question' => $faq_question,
                        'faq_answer' => $faq_answer,
                        'updated_by' => auth()->user()->id
                    ]);

        return redirect('/admin/faq/'.$page_slug.'/list');
    }
}


