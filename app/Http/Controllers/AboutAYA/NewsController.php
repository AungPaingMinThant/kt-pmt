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
        $categories = Category::where('id',4)->get();
        $blog_list = Blog::where('blog_category',4)->get();
        return view('about-aya.news-room.corporate')->with('blog_list',$blog_list);
    }
}
