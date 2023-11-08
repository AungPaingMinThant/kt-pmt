<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth; 
use App\Models\Point;
use DB;
use URL;

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
        $member_list = DB::table('members')->where('phone', $phone)->first();
        if ($member_list) {
            return view('admin.addpoints.add')->with('member_list', $member_list);
        } else {
            $error = "Member not found with the provided phone number.";
            return redirect('admin/addpoints')->with('error', $error);
        }
    }
    

    public function redeemInfo(Request $request) {
        $phone = $request->phone;
        $member_list = DB::table('members')->where('phone', $phone)->first();
        if ($member_list) {
            return view('admin.addpoints.add')->with('member_list', $member_list);
        } else {
            $error = "Member not found with the provided phone number.";
            return redirect('admin/addpoints')->with('error', $error);
        // echo $phone;
        // print_r( $member_list);
        // exit(); 
        }
    }
    
    public function pointAdd (Request $request) {
        $id = $request->id;
        $employee_id = $request->employee_id;
        $point_in = $request->point_in;
        $amount = $request->amount;
        $redeem = $request->redeem;
        

        $pointsToAdd = floor($amount / 5000);
        $point_in += $pointsToAdd;
        
        $point = new Point;
        $point -> employee_id = $employee_id;
        $point->point_in = $point_in;
        $point->amount = $amount;
        
        $point->created_by = auth()->user()->id;
        $point->updated_by = auth()->user()->id;
        $point->save();
        
        $point_list = DB::table('points')->get(); 
        return view('admin.member.detail', ['point_list' => $point_list])->with('success', 'Points added successfully.');
    }   
}
