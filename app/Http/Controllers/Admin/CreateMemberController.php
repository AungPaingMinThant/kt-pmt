<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth; 
use App\Models\Member;
use DB;
use URL;

class CreateMemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function index()
    {       
        $member_list = DB::table('members')->get(); 
        return view('admin.create.list')->with('member_list',$member_list);
    }

    public function addMember(Request $request)
    {
        $id = $request->id;
        $employee_id = $request->employee_id;
        $name = $request->name;
        $phone = $request->phone;
        $amount = $request->amount;
        $member_point = $request->member_point;
    
        $pointsToAdd = floor($amount / 5000);
        $member_point += $pointsToAdd;

        $latestEmployeeID = Cache::get('last_generated_number', 1000);
        $latestEmployeeID += 1;
        if ($latestEmployeeID > 9999) {
            $latestEmployeeID = 1001;
        }
        Cache::put('last_generated_number', $latestEmployeeID, now()->addDay());
        $employee_id = "KT_M_" . $latestEmployeeID;
    
        $member = new Member;
        $member->employee_id = $employee_id;
        $member->name = $name;
        $member->phone = $phone;
        $member->amount = $amount;
        $member->member_point = $member_point;
    
        $member->created_by = auth()->user()->id;
        $member->updated_by = auth()->user()->id;
        $member->save();
        
        $member_list = DB::table('members')->get();
        return view('admin.member.list', ['employee_id' => $employee_id, 'member_list' => $member_list])
            ->with('success', 'Member added successfully.');
        
    }
    
}
