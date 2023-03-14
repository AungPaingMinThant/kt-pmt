<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Activity;
use App\Models\Report;
use App\Models\ReportFile;
use App\Models\SearchKeyword;
use DB;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function report($value='')
    {
        $categories = Category::get();
        $report_list = Report::get();
        return view('admin.report.list')->with('categories',$categories)
                                        ->with('report_list',$report_list);
    }

    public function ReportAdd($value='')
    {
        $categories = Category::get();
        
        return view('admin.report.reportadd')->with('categories',$categories);
    }

    public function ReportStore(Request $request)
    {
        $report_title = $request->report_title;
        $report_category = $request->report_category;
        $search_keywords = $request->search_keywords;
        $pieces = explode(",", $search_keywords);

        $report = new Report;
        $report->report_title = $report_title;
        $report->report_category = $report_category;
        $report->created_by = auth()->user()->id;
        $report->updated_by = auth()->user()->id;
        $report->save();

        for ($i=0; $i < count($pieces) ; $i++) { 
            $key = new SearchKeyword;
            $key->search_key_id = $report->id;
            $key->keywords = $pieces[$i];
            $key->search_type = '2';
            $key->save();
        }

        if ($request->hasFile('report_file')) {
            $reportfile = $request->file('report_file');
            $file = $reportfile->getClientOriginalName();
            $upload_path = public_path() . '/report_files/';
            $reportfile->move($upload_path, $file);
            $report_path = "report_files/" . $file;

            $new_img = new ReportFile();
            $new_img->report_id = $report->id;
            $new_img->file_path = $report_path ?? '';
            $new_img->save();
        }

        $act = new Activity();
        $act->user_id = auth()->user()->id;
        $act->reason = 'Create a new Report [ '.$report->report_title.' ].';
        $act->save();

        return redirect('/admin/report')->with('success','Report create successfully.');
    }

    public function ReportEdit($report_id)
    {
        $report_data = Report::where('id', $report_id)->first();
        $categories = Category::get();
        $report_files = ReportFile::where('report_id', $report_id)->first();
        $search_keywords = SearchKeyword::where('search_key_id',$report_id)->get();
        $search_keywords_arr = array();
        foreach($search_keywords as $key) {
            $search_keywords_arr[] = $key->keywords;
        }
        $keywords = implode(",", $search_keywords_arr);
        return view('admin.report.reportedit')->with('report_data',$report_data)
                                        ->with('categories',$categories)
                                        ->with('report_files',$report_files)
                                        ->with('keywords',$keywords);
    }

    public function ReportUpdate(Request $request)
    {
        $report_title = $request->report_title;
        $report_category = $request->report_category;
        $report_id = $request->report_id;
        $search_keywords = $request->search_keywords;
        $pieces = explode(",", $search_keywords);

        $blog = DB::table('reports')
                    ->where('id', $report_id)
                    ->update([
                        'report_title' => $report_title,
                        'report_category' => $report_category,
                        'updated_at' => date('Y-m-d H:i:s'),
                        'updated_by' => auth()->user()->id
                    ]);

        $report_data = Report::where('id', $report_id)->first();

        DB::table('search_keywords')->where('search_key_id', $report_id)->delete();

        for ($i=0; $i < count($pieces) ; $i++) { 
            $key = new SearchKeyword;
            $key->search_key_id = $report_data->id;
            $key->keywords = $pieces[$i];
            $key->search_type = '2';
            $key->save();
        }

        if($request->old_file_url == ''){
            if ($request->hasFile('report_file')) {
                DB::table('report_files')->where('report_id', $report_id)->delete();

                $reportfile = $request->file('report_file');
                $file = $reportfile->getClientOriginalName();
                $upload_path = public_path() . '/report_files/';
                $reportfile->move($upload_path, $file);
                $report_path = "report_files/" . $file;

                $new_img = new ReportFile();
                $new_img->report_id = $report_data->id;
                $new_img->file_path = $report_path ?? '';
                $new_img->save();
            }
        }

        $act = new Activity();
        $act->user_id = auth()->user()->id;
        $act->reason = 'Update report [ '.$report_data->report_title.' ].';
        $act->save();

        return redirect('/admin/report')->with('success','Report update successfully.');
    }

    public function ReportDelete(Request $request)
    {
        $report_id = $request->report_id;
        $report = Report::where('id',$report_id)->first();

        DB::table('reports')->where('id', $report_id)->delete();

        $act = new Activity();
        $act->user_id = auth()->user()->id;
        $act->reason = 'Delete report [ '.$report->report_title.' ].';
        $act->save();

        return redirect('/admin/report')->with('success','Report delete successfully.');
    }
}
