<?php

namespace App\Http\Controllers\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use App\Models\BlogFile;

class SustainabilityController extends Controller
{
    public function sustainabilityIndex()
    {
        return view('about-aya.sustainability.sustainability-index');
    }

    public function socialSustainabilityIndex()
    {
        return view('about-aya.sustainability.social-sustainability');
    }

    public function environmentalSustainabilityIndex()
    {
        return view('about-aya.sustainability.environmental-sustainability');
    }

    public function economicSustainabilityIndex()
    {
        return view('about-aya.sustainability.economic-sustainability');
    }

    public function UNGCIndex()
    {
        return view('about-aya.sustainability.ungc-compliance');
    }

    public function CSRIndex()
    {
        $categories = Category::where('id','!=',9)->get();
        $blog_list = Blog::where('blog_category',9)->orderBy('publish_date','desc')->where('status','0')->paginate(3);
        $yearList = Blog::select('publish_year')->where('blog_category',9)->where('status','0')->groupBy('publish_year')->orderBy('publish_date','desc')->get();
        return view('about-aya.sustainability.csr')->with('blog_list',$blog_list)
                                                    ->with('yearList',$yearList)
                                                    ->with('categories',$categories)
                                                    ->with('news_year','');
    }
}
