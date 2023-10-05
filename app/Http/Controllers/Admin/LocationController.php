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

    public function locationBranch()
    {
        $branch_data = DB::table('stores')->where('cat_id','1')->get();
        return view('admin.location.branch')->with('branch_data',$branch_data);
    }

    public function branchAdd ()
    {
        return view ('admin.location.branchadd');
    }

    public function branchEdit()
    {
        return view ('admin.location.branchedit');
    }

    public function locationAtm()
    {
        $atm_data = DB::table('stores')->where('cat_id','2')->get();
        return view('admin.location.amt')->with('atm_data',$atm_data);
    }

    public function locationFx()
    {
        $fx_data = DB::table('stores')->where('cat_id','3')->get();
        return view('admin.location.fx')->with('fx_data',$fx_data);
    }

   

    public function atmAdd ()
    {
        return view ('admin.location.atmadd');
    }

    public function fxAdd ()
    {
        return view ('admin.location.fxadd');
    }


    // public function branchStore(Request $request)
    // {
    //     $branch_count = $request->branch_count;
    //     $region = $request->region;
    //     $name = $request->name;
    //     $address = $request->address;
    //     $telephone = $request->telephone;
    //     $fax = $request->fax;
       
    //         for ($branch = 1; $branch <= $branch_count; $branch++){
    //             $branch_id = $request->input('bh_id_' . $branch);
    //             if($branch_id !='0') {
    //                 $location = DB::table('stores')
    //                 ->where('id', $id)
    //                 ->update ([
    //                     'region' => $region,
    //                     'name' => $name,
    //                     'address' => $address,
    //                     'telephone' => $telephone,
    //                     'fax' => $fax,
    //                     'updated_by' => auth()->user()->id
    //                 ]);
    //             } else {
    //                 $branch_location = new Branch;
    //                 $branch_location -> region = $region;
    //                 $branch_location -> name = $name;
    //                 $branch_location -> address = $address;
    //                 $branch_location -> telephone = $telephone;
    //                 $branch_location -> fax = $fax;
    //                 $branch_location->updated_by = auth()->user()->id;
    //                 $branch_location->created_by = auth()->user()->id;
    //                 $branch_location->save();
    //             }
    //         }
    //     }
}