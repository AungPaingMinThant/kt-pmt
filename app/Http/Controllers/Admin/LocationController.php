<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branch;

use DB;

class LocationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function pagelocation()
    {
        return view('admin.location.list');
    }
// Branch
    public function locationBranch()
    {
        $branch_list = DB::table('stores')->where('cat_id','1')->get();
        return view('admin.location.branch')->with('branch_list',$branch_list);
    }

    public function branchAdd ()
    {
        return view ('admin.location.branchadd');
    }

    public function branchEdit($branch_id)
    {  
        $branch_data = DB::table('stores')->where('id', $branch_id)->first();
        return view ('admin.location.branchedit')->with('branch_data',$branch_data);
    }
// ATM 
    public function locationAtm()
    {
        $atm_list = DB::table('stores')->where('cat_id','2')->get();
        return view('admin.location.amt')->with('atm_list',$atm_list);
    }

    public function atmAdd ()
    {
        return view ('admin.location.atmadd');
    }

    public function atmEdit($atm_id)
{
    $atm_data = DB::table('stores')->where('id', $atm_id)->first();
    return view('admin.location.atmedit')->with('atm_data', $atm_data);
}

// FX
    public function locationFx()
    {
        $fx_list = DB::table('stores')->where('cat_id','3')->get();
        return view('admin.location.fx')->with('fx_list',$fx_list);
    }

    public function fxAdd ()
    {
       
        return view ('admin.location.fxadd');
    }

    public function fxEdit($fx_id)
{
    $fx_data = DB::table('stores')->where('id', $fx_id)->first();
    return view('admin.location.fxedit')->with('fx_data', $fx_data);
}

    public function branchUpdate(Request $request)
    {
        $branch_id = $request->branch_id;
        $region = $request->region;
        $name = $request->name;
        $list_address = $request->list_address;
        $telephone = $request->telephone;
        $fax = $request->fax;
        
        $branch = DB::table ('stores')
            ->where('id', $branch_id)
            ->update ([
                'region' => $region,
                'name'=> $name,
                'list_address'=>$list_address,
                'telephone'=>$telephone,
                'fax'=>$fax,
                'updated_by' => auth()->user()->id

            ]);
            // $branch_list = DB::table('stores')->where('cat_id','1')->get();
            // return view('admin.location.branch')->with('branch_list',$branch_list);
    }
}