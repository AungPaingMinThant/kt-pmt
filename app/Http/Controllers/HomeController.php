<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use App\Models\BlogFile;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('id','!=',4)->get();
        $first_blog = Blog::where('blog_category',4)->where('status','0')->orderBy('publish_date','desc')->first();
        $second_blog = Blog::where('blog_category',4)->where('id','!=',$first_blog->id)->where('status','0')->orderBy('publish_date','desc')->first();
        $third_blog = Blog::where('blog_category',4)->where('id','!=',$first_blog->id)->where('id','!=',$second_blog->id)->where('status','0')->orderBy('publish_date','desc')->first();
        $yearList = Blog::select('publish_year')->where('blog_category',4)->groupBy('publish_year')->orderBy('publish_date','desc')->get();

        return view('landing.index')->with('first_blog',$first_blog)
                                    ->with('second_blog',$second_blog)
                                    ->with('third_blog',$third_blog);
    }
    
    public function indexNew()
    {
        $categories = Category::where('id','!=',4)->get();
        $first_blog = Blog::where('blog_category',4)->where('status','0')->orderBy('publish_date','desc')->first();
        $second_blog = Blog::where('blog_category',4)->where('id','!=',$first_blog->id)->where('status','0')->orderBy('publish_date','desc')->first();
        $third_blog = Blog::where('blog_category',4)->where('id','!=',$first_blog->id)->where('id','!=',$second_blog->id)->where('status','0')->orderBy('publish_date','desc')->first();
        $yearList = Blog::select('publish_year')->where('blog_category',4)->groupBy('publish_year')->orderBy('publish_date','desc')->get();

        return view('landing.index_new')->with('first_blog',$first_blog)
                                    ->with('second_blog',$second_blog)
                                    ->with('third_blog',$third_blog);
    }

    public function testIndex()
    {
        return view('test.index');
    }
}
