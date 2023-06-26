<?php

namespace App\Http\Controllers\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use App\Models\BlogFile;
use App\Models\SubscribeUser;
use URL;

class NewsController extends Controller
{
    public function corporateIndex($value='')
    {
        $categories = Category::where('id','!=',4)->get();
        $blog_list = Blog::where('blog_category',4)->orderBy('publish_date','desc')->paginate(9);
        $yearList = Blog::select('publish_year')->where('blog_category',4)->groupBy('publish_year')->orderBy('publish_date','desc')->get();

        return view('about-aya.news-room.corporate')->with('blog_list',$blog_list)
                                                    ->with('yearList',$yearList)
                                                    ->with('categories',$categories)
                                                    ->with('news_year','');
    }

    public function corporateYearIndex($year)
    {
        $categories = Category::where('id','!=',4)->get();
        $blog_list = Blog::where('blog_category',4)->where('publish_year',$year)->orderBy('publish_date','desc')->paginate(9);
        $yearList = Blog::select('publish_year')->where('blog_category',4)->groupBy('publish_year')->orderBy('publish_date','desc')->get();

        return view('about-aya.news-room.corporate')->with('blog_list',$blog_list)
                                                    ->with('yearList',$yearList)
                                                    ->with('categories',$categories)
                                                    ->with('news_year',$year);
    }

    public function corporateDetailIndex($permalink)
    {
        $blog = Blog::where('permalink',$permalink)->first();
        $categories = Category::where('id','!=',4)->get();
        $yearList = Blog::select('publish_year')->where('blog_category',4)->groupBy('publish_year')->orderBy('publish_date','desc')->get();

        return view('about-aya.news-room.corporate-detail')->with('blog',$blog)
                                                            ->with('yearList',$yearList)
                                                            ->with('categories',$categories)
                                                            ->with('news_year','');
    }

    public function reportIndex()
    {
        return view('about-aya.news-room.report');
    }

    public function reportDownload(Request $request)
    {
        $report_down_email = $request->report_down_email;
        $report_file = $request->report_file;
        $subscribe_flag = $request->subscribe_flag;

        $subscribe = new SubscribeUser;
        $subscribe->email = $report_down_email;
        $subscribe->subscribe_flag = $subscribe_flag;
        $subscribe->save();

        if ($subscribe_flag == 1) {
            $temp_file = tempnam(sys_get_temp_dir(), $report_file);
            copy(URL::to('/').'/report_files/annual_report/'.$report_file, $temp_file);
        }
        if ($subscribe_flag == 2) {
            $temp_file = tempnam(sys_get_temp_dir(), $report_file);
            copy(URL::to('/').'/report_files/annual_general_meeting_notice/'.$report_file, $temp_file);
        }
        

        return Response::download($temp_file, $report_file);
    }
}
