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
            $branch_list = DB::table('stores')->where('cat_id','1')->paginate(20);
        } else {
            $branch_list = DB::table('stores')->where('cat_id','1')->paginate($show_ent);
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
            $branch_list = DB::table('stores')->where('cat_id','2')->paginate(20);
        } else {
            $branch_list = DB::table('stores')->where('cat_id','2')->paginate($show_ent);
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
            $branch_list = DB::table('stores')->where('cat_id','3')->paginate(20);
        } else {
            $branch_list = DB::table('stores')->where('cat_id','3')->paginate($show_ent);
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
}
