<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use DB;

class AddPointController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function addPoint()
    {
        return view('admin.addpoints.list');
    }

    public function redeem() 
    {

        return view('admin.redeem.list');
    }

    public function showInfo(Request $request) {

        $phone = $request->phone;
        $member_list = DB::table('members')->where('phone',$phone)->first();
        return view('admin.addpoints.add')->with('member_list',$member_list);
        // echo $phone;
        // print_r( $member_list);
        // exit();
    } 

    public function redeemInfo(Request $request) {
        $phone = $request->phone;
        $member_list = DB::table('members')->where('phone',$phone)->first();
        return view('admin.redeem.redeem')->with('member_list',$member_list);
    }
    
    public function add(Request $request) {
        $member_id = $request->member_id;
        $member_point = $request->member_point;
        $amount = $request->amount;

        $pointsToAdd = floor($amount / 5000);
        


        $member_list = DB::table('members')->where('id',$member_id)->increment('member_point', $pointsToAdd);
        return redirect('/admin/addpoints/')->with('success', 'Points Added successfully');
    } 
   
}
