<?php

namespace App\Http\Controllers\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use App\Models\BlogFile;

class NewsController extends Controller
{
    public function corporateIndex($value='')
    {
        $categories = Category::where('id','!=',4)->get();
        $blog_list = Blog::where('blog_category',4)->orderBy('publish_date','desc')->paginate(9);
        $yearList = Blog::select('publish_year')->where('blog_category',4)->groupBy('publish_year')->orderBy('publish_date','desc')->get();

        return view('about-aya.news-room.corporate')->with('blog_list',$blog_list)
                                                    ->with('yearList',$yearList)
                                                    ->with('categories',$categories);
    }

    public function corporateDetailIndex($permalink)
    {
        $blog = Blog::where('permalink',$permalink)->first();
        $categories = Category::where('id','!=',4)->get();
        $yearList = Blog::select('publish_year')->where('blog_category',4)->groupBy('publish_year')->orderBy('publish_date','desc')->get();

        return view('about-aya.news-room.corporate-detail')->with('blog',$blog)
                                                            ->with('yearList',$yearList)
                                                            ->with('categories',$categories);
    }
}
