<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Activity;
use App\Models\Blog;
use App\Models\BlogFile;
use App\Models\SearchKeyword;
use DB;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function blog($value='')
    {
        $categories = Category::get();
        $blog_list = Blog::get();
        return view('admin.blog.list')->with('categories',$categories)
                                        ->with('blog_list',$blog_list);
    }

    public function blogAdd($value='')
    {
        $categories = Category::get();
        
        return view('admin.blog.blogadd')->with('categories',$categories);
    }

    public function blogStore(Request $request)
    {
        $blog_title = $request->blog_title;
        $blog_category = $request->blog_category;
        $blog_desc = $request->blog_desc;
        $media_type = $request->media_type;
        $publish_date = $request->publish_date;
        $status = $request->status;
        $search_keywords = $request->search_keywords;

        $pieces = explode(",", $search_keywords);

        $blog = new Blog;
        $blog->blog_title = $blog_title;
        $blog->blog_category = $blog_category;
        $blog->blog_desc = $blog_desc;
        $blog->media_type = $media_type;
        $blog->publish_date = $publish_date;
        $blog->status = $status;
        $blog->created_by = auth()->user()->id;
        $blog->updated_by = auth()->user()->id;
        $blog->save();

        for ($i=0; $i < count($pieces) ; $i++) { 
            $key = new SearchKeyword;
            $key->search_key_id = $blog->id;
            $key->keywords = $pieces[$i];
            $key->search_type = '0';
            $key->save();
        }

        if ($media_type == '1') {
            if ($request->hasFile('single_image')) {
                $imagefile = $request->file('single_image');
                $file = $imagefile->getClientOriginalName();
                $upload_path = public_path() . '/blog_images/';
                $imagefile->move($upload_path, $file);
                $news_img_path = "blog_images/" . $file;

                $new_img = new BlogFile();
                $new_img->blog_id = $blog->id;
                $new_img->file_path = $news_img_path;
                $new_img->save();
            }
        } else {
            if ($request->hasFile('multiple_image')) {
                foreach ($request->file('multiple_image') as $imagefile) {
                    $file = $imagefile->getClientOriginalName();
                    $upload_path = public_path() . '/blog_images/';
                    $imagefile->move($upload_path, $file);
                    $news_img_path = "blog_images/" . $file;

                    $new_img = new BlogFile();
                    $new_img->blog_id = $blog->id;
                    $new_img->file_path = $news_img_path;
                    $new_img->save();
                }
            }
        }

        $act = new Activity();
        $act->user_id = auth()->user()->id;
        $act->reason = 'Create a new blog [ '.$blog->blog_title.' ].';
        $act->save();

        return redirect('/admin/blog')->with('success','Blog create successfully.');
    }

    public function blogDelete(Request $request)
    {
        $blog_id = $request->blog_id;
        $blog = Blog::where('id',$blog_id)->first();

        DB::table('blogs')->where('id', $blog_id)->delete();

        $act = new Activity();
        $act->user_id = auth()->user()->id;
        $act->reason = 'Delete blog [ '.$blog->blog_title.' ].';
        $act->save();

        return redirect('/admin/blog')->with('success','Blog delete successfully.');
    }

    public function blogEdit($blog_id)
    {
        $blog_data = Blog::where('id', $blog_id)->first();
        $categories = Category::get();
        $blog_files = BlogFile::where('blog_id', $blog_id)->get();
        $search_keywords = SearchKeyword::where('search_key_id',$blog_id)->get();
        $search_keywords_arr = array();
        foreach($search_keywords as $key) {
            $search_keywords_arr[] = $key->keywords;
        }
        $keywords = implode(",", $search_keywords_arr);

        return view('admin.blog.blogedit')->with('blog_data',$blog_data)
                                        ->with('categories',$categories)
                                        ->with('blog_files',$blog_files)
                                        ->with('keywords',$keywords);
    }

    public function blogUpdate(Request $request)
    {
        $blog_id = $request->blog_id;
        $blog_title = $request->blog_title;
        $blog_category = $request->blog_category;
        $blog_desc = $request->blog_desc;
        $media_type = $request->media_type;
        $publish_date = $request->publish_date;
        $search_keywords = $request->search_keywords;

        $pieces = explode(",", $search_keywords);

        $blog = DB::table('blogs')
                    ->where('id', $blog_id)
                    ->update([
                        'blog_title' => $blog_title,
                        'blog_category' => $blog_category,
                        'blog_desc' => $blog_desc,
                        'media_type' => $media_type,
                        'publish_date' => $publish_date,
                        'updated_at' => date('Y-m-d H:i:s'),
                        'updated_by' => auth()->user()->id
                    ]);

        $blog_data = Blog::where('id', $blog_id)->first();

        DB::table('search_keywords')->where('search_key_id', $blog_id)->delete();

        for ($i=0; $i < count($pieces) ; $i++) { 
            $key = new SearchKeyword;
            $key->search_key_id = $blog_data->id;
            $key->keywords = $pieces[$i];
            $key->search_type = '0';
            $key->save();
        }

        if($request->old_image == '0') {
            if ($media_type == '1') {
                if ($request->hasFile('single_image')) {
                    DB::table('blog_files')->where('blog_id', $blog_id)->delete();

                    $imagefile = $request->file('single_image');
                    $file = $imagefile->getClientOriginalName();
                    $upload_path = public_path() . '/blog_images/';
                    $imagefile->move($upload_path, $file);
                    $news_img_path = "blog_images/" . $file;

                    $new_img = new BlogFile();
                    $new_img->blog_id = $blog_id;
                    $new_img->file_path = $news_img_path;
                    $new_img->save();
                }
            } else {
                if ($request->hasFile('multiple_image')) {
                    DB::table('blog_files')->where('blog_id', $blog_id)->delete();

                    foreach ($request->file('multiple_image') as $imagefile) {
                        $file = $imagefile->getClientOriginalName();
                        $upload_path = public_path() . '/blog_images/';
                        $imagefile->move($upload_path, $file);
                        $news_img_path = "blog_images/" . $file;

                        $new_img = new BlogFile();
                        $new_img->blog_id = $blog_id;
                        $new_img->file_path = $news_img_path;
                        $new_img->save();
                    }
                }
            }
        }

        $act = new Activity();
        $act->user_id = auth()->user()->id;
        $act->reason = 'Update blog [ '.$blog_data->blog_title.' ].';
        $act->save();

        return redirect('/admin/blog')->with('success','Blog update successfully.');
    }
}
