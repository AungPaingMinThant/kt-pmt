<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Activity;
use DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function categories()
    {
        $categories = Category::get();
        return view('admin.category.categories')->with('categories',$categories);
    }

    public function categoryAdd()
    {
        $categories = Category::get();
        return view('admin.category.category_add')->with('categories',$categories);
    }

    public function categoryStore(Request $request)
    {
        $category_name = $request->category_name;
        $parent_category = $request->parent_category;

        $category = new Category;
        $category->category_name = $category_name;
        $category->parent_category = $parent_category ?? '0';
        $category->save();

        $act = new Activity();
        $act->user_id = auth()->user()->id;
        $act->reason = 'Create new category [ '.$category->category_name.' ].';
        $act->save();

        return redirect('/admin/categories')->with('success','Category create successfully.');
    }

    public function categoryDelete(Request $request)
    {
        $category_id = $request->category_id;
        $category = Category::where('id',$category_id)->first();

        DB::table('categories')->where('id', $category_id)->delete();

        $categories = DB::table('categories')
                        ->where('parent_category', $category_id)
                        ->update([
                            'parent_category' => '0'
                        ]);

        $act = new Activity();
        $act->user_id = auth()->user()->id;
        $act->reason = 'Delete category [ '.$category->category_name.' ].';
        $act->save();

        return redirect('/admin/categories')->with('success','Category delete successfully.');
    }

    public function categoryEdit($category_id)
    {
        $category_data = Category::where('id', $category_id)->first();
        $categories = Category::where('id','!=',$category_id)->get();
        return view('admin.category.category_edit')->with('categories',$categories)
                                            ->with('category_data',$category_data);
    }

    public function categoryUpdate(Request $request)
    {
        $category_name = $request->category_name;
        $parent_category = $request->parent_category;
        $category_id = $request->category_id;

        $categories = DB::table('categories')
                        ->where('id', $category_id)
                        ->update([
                            'category_name' => $category_name,
                            'parent_category' => $parent_category ?? '0'
                        ]);

        $act = new Activity();
        $act->user_id = auth()->user()->id;
        $act->reason = 'Update category';
        $act->save();

        return redirect('/admin/categories')->with('success','Category update successfully.');
    }
}
