<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function member($value='')
    {
        $member_list = DB::table('members')->get();
        return view('admin.member.list')->with('member_list',$member_list);
    }
    
    public function memberShow(){
        $member_list = DB::table('members')->get();
        return view ('admin.member')->with('member_list',$member_list);
    }
    public function detail($member_id) {
        $member_list = DB::table('members')->where('id',$member_id)->first();
        return view('admin.member.detail')->with('member_list',$member_list);
    }
    public function edit($member_id) {
        $member_list = DB::table('members')->where('id',$member_id)->first();
        return view('admin.member.edit')->with('member_list',$member_list);
    } 

    public function update(Request $request)
    {
        $member_id = $request->member_id;
        $name = $request->name;
        $phone = $request->phone;
           
        $member = DB::table ('members')
            ->where( 'id',$member_id)
            ->update ([
                'name' => $name,
                'phone' => $phone,
                'updated_by' => auth()->user()->id
            ]);
            $member_list = DB::table('members')->where('id',$member_id)->get();
            return redirect('/admin/member')->with('success', 'Member information updated successfully');
    }
}
