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
        return view('admin.redeem.redeempoint')->with('member_list',$member_list);
        // echo $phone;
        // print_r( $member_list);
        // exit();
        
    }
    
    public function add(Request $request) {
    // Get the member ID and points to add from the request
    $member_id = $request->input('member_id');
    $pointsToAdd = $request->input('member_point'); // Rename the variable for clarity
    $amount = $request->input('amount'); // You might use this later in your function

    // Check if the member with the given ID exists
    $member = DB::table('members')->where('id', $member_id)->first();

    if (!$member) {
        // If the member does not exist, redirect with an error message
        return redirect('/admin/addpoints/')->with('error', 'Member not found');
    }

    // Update the member's points by incrementing the 'member_point' column
    DB::table('members')->where('id', $member_id)->increment('member_point', $pointsToAdd);

    // Redirect with a success message after updating the points
    return redirect('/admin/addpoints/')->with('success', 'Points added successfully');
}

}
