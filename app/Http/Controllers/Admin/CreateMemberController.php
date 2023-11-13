<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth; 
use App\Models\Member;
use App\Models\MemberID;
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
        $member_id = MemberID::orderBy('id','desc')->first();

        if (isset($member_id)) {
            $last_member_id = int($member_id->generated_ID) + 1;
        } else {
            $last_member_id = '001';
        }

        $member_exist = Member::where('employee_id','KT_M_'.$last_member_id)->first();

        if (isset($member_exist)) {
            return view('admin.create.list')->with('member_list',$member_list)
                                            ->with('last_member_id', $last_member_id);
        } else {
            $member_id_gen = new MemberID;
            $member_id_gen->generated_ID = $last_member_id;     
            $member_id_gen->created_by = auth()->user()->id;
            $member_id_gen->updated_by = auth()->user()->id;
            $member_id_gen->save();

            return view('admin.create.list')->with('member_list',$member_list)
                                            ->with('last_member_id', $last_member_id);
        }

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
        return view('admin.create.list', ['employee_id' => $employee_id, 'member_list' => $member_list])
        ->with('success', 'Member added successfully.');
    }
    private function generateRandomEmployeeID()
    {
        return 'KT_M_' . uniqid();
    }
}
