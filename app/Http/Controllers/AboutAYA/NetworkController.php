<?php

namespace App\Http\Controllers\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class NetworkController extends Controller
{
    public function branchIndex(Request $request)
    {
        $show_ent = $request->show_entries;
        if($show_ent == '') {
            $show_ent = 20;
            $branch_list = DB::table('stores')->where('cat_id','1')->orderBy('region','desc')->orderBy('township','desc')->paginate(20);
        } else {
            if ($show_ent == '0') {
                $branch_list = DB::table('stores')->where('cat_id','1')->orderBy('region','desc')->orderBy('township','desc')->get();
            } else {
                $branch_list = DB::table('stores')->where('cat_id','1')->orderBy('region','desc')->orderBy('township','desc')->paginate($show_ent);
            }
        }

        $total_branch = DB::table('stores')->where('cat_id','1')->get();
        
        return view('about-aya.network.branch-index')->with('branch_list', $branch_list)
                                                        ->with('show_ent', $show_ent)
                                                        ->with('total_branch',$total_branch)
                                                        ->with('pagi_page',$request['page']);
    }

    public function ATMIndex(Request $request)
    {
        $show_ent = $request->show_entries;
        if($show_ent == '') {
            $show_ent = 20;
            $branch_list = DB::table('stores')->where('cat_id','2')->orderBy('region','desc')->orderBy('township','desc')->paginate(20);
        } else {
            if ($show_ent == '0') {
                $branch_list = DB::table('stores')->where('cat_id','2')->orderBy('region','desc')->orderBy('township','desc')->get();
            } else {
                $branch_list = DB::table('stores')->where('cat_id','2')->orderBy('region','desc')->orderBy('township','desc')->paginate($show_ent);
            }
        }

        $total_branch = DB::table('stores')->where('cat_id','2')->get();
        
        return view('about-aya.network.atm-index')->with('branch_list', $branch_list)
                                                        ->with('show_ent', $show_ent)
                                                        ->with('total_branch',$total_branch)
                                                        ->with('pagi_page',$request['page']);
    }
    
    public function FXIndex(Request $request)
    {
        $show_ent = $request->show_entries;
        if($show_ent == '') {
            $show_ent = 20;
            $branch_list = DB::table('stores')->where('cat_id','3')->orderBy('region','desc')->orderBy('township','desc')->paginate(20);
        } else {
            if ($show_ent == '0') {
                $branch_list = DB::table('stores')->where('cat_id','3')->orderBy('region','desc')->orderBy('township','desc')->get();
            } else {
                $branch_list = DB::table('stores')->where('cat_id','3')->orderBy('region','desc')->orderBy('township','desc')->paginate($show_ent);
            }
        }

        $total_branch = DB::table('stores')->where('cat_id','3')->get();
        
        return view('about-aya.network.fx-counter-index')->with('branch_list', $branch_list)
                                                        ->with('show_ent', $show_ent)
                                                        ->with('total_branch',$total_branch)
                                                        ->with('pagi_page',$request['page']);
    }
    
    public function correspondentBankIndex()
    {
        return view('about-aya.network.correspondent-index');
    }

    public function locationSearch(Request $request)
    {
        $search_value = $request->search_value;
        $show_ent = $request->show_entries;

        $branch_list = DB::table('stores')
                                ->where('cat_id','2')
                                ->where(function($query) use ($search_value) {
                                    $query->where(DB::raw('lower(name)'), 'like','%'.strtolower($search_value).'%')
                                            ->orWhere(DB::raw('lower(list_address)'), 'like','%'.strtolower($search_value).'%');
                                })
                                ->orderBy('region','desc')->orderBy('township','desc')
                                ->get();

        $show_ent = 0;

        $total_branch = DB::table('stores')->where('cat_id','2')->get();
        
        $arr['data']['message'] = 'Thank you so much for your feedback.';

        $arr['data']['branch_list'] = $branch_list;
        $arr['data']['show_ent'] = $show_ent;
        $arr['data']['search_value'] = $search_value;

        return $arr;
    }

    public function branchlocationSearch(Request $request)
    {
        $search_value = $request->search_value;
        $show_ent = $request->show_entries;

        $branch_list = DB::table('stores')
                                ->where('cat_id','1')
                                ->where(function($query) use ($search_value) {
                                    $query->where(DB::raw('lower(name)'), 'like','%'.strtolower($search_value).'%')
                                            ->orWhere(DB::raw('lower(list_address)'), 'like','%'.strtolower($search_value).'%');
                                })
                                ->orderBy('region','desc')->orderBy('township','desc')
                                ->get();

        $show_ent = 0;

        $total_branch = DB::table('stores')->where('cat_id','1')->get();
        
        $arr['data']['message'] = 'Thank you so much for your feedback.';

        $arr['data']['branch_list'] = $branch_list;
        $arr['data']['show_ent'] = $show_ent;
        $arr['data']['search_value'] = $search_value;

        return $arr;
    }

    public function FXSearch(Request $request)
    {
        $search_value = $request->search_value;
        $show_ent = $request->show_entries;

        $branch_list = DB::table('stores')
                                ->where('cat_id','3')                                
                                ->where(function($query) use ($search_value) {
                                    $query->where(DB::raw('lower(name)'), 'like','%'.strtolower($search_value).'%')
                                            ->orWhere(DB::raw('lower(list_address)'), 'like','%'.strtolower($search_value).'%');
                                })
                                ->orderBy('region','desc')->orderBy('township','desc')
                                ->get();

        $show_ent = 0;

        $total_branch = DB::table('stores')->where('cat_id','3')->get();
        
        $arr['data']['message'] = 'Thank you so much for your feedback.';

        $arr['data']['branch_list'] = $branch_list;
        $arr['data']['show_ent'] = $show_ent;
        $arr['data']['search_value'] = $search_value;

        return $arr;
    }

}
