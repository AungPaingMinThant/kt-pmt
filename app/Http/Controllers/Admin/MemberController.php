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
    public function detail() {
        $member_list = DB::table('members')->get();
        return view('admin.member.detail')->with('member_list',$member_list);
    }
    public function edit() {
        $member_list = DB::table('members')->get();
        return view('admin.member.edit')->with('member_list',$member_list);
    } 
}
