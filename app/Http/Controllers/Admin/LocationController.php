<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stores;
use App\Models\Atm;
use App\Models\Fx;

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

    public function insertBranch(Request $request)
    {
        $branch_id = $request->branch_id;
        $region = $request->region;
        $name = $request->branch_name;
        $list_address = $request->list_address;
        $telephone = $request->telephone;
        $latitude = $request->latitude;
        $longitude = $request->longitude; 
        $fax = $request->fax;
        

        $stores = new Stores;
        $stores->region = $region;
        $stores->name = $name;
        $stores->list_address = $list_address;
        $stores->telephone = $telephone;
        $stores->latitude = $latitude;
        $stores->longitude = $longitude;
        $stores->fax = $fax;
        $stores->cat_id = '1';
        $stores->created_by = auth()->user()->id;
        $stores->updated_by = auth()->user()->id;
        $stores->save();

        $branch_list = DB::table('stores')->where('cat_id', '1')->get();
        return redirect('/admin/location/branch-location');
    }

    
    
    public function branchAdd ()
    {   
        $branch_list = DB::table('stores')->where('cat_id', '1')->get();
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
        return view('admin.location.atm')->with('atm_list',$atm_list);
    }

    public function insertAtm(Request $request)
    {
        $atm_id = $request->atm_id;
        $region = $request->region;
        $township = $request->township;
        $name = $request->name;
        $list_address = $request->list_address;
        

        $stores = new Stores;
        $stores->region = $region;
        $stores->township = $township;
        $stores->name = $name;
        $stores->list_address = $list_address;
        $stores->cat_id = '2';
        $stores->created_by = auth()->user()->id;
        $stores->updated_by = auth()->user()->id;
        $stores->save();

        $atm_list = DB::table('stores')->where('cat_id','2')->get();
        return view('admin.location.atm')->with('atm_list',$atm_list);     
    }

    public function atmAdd ()
    {
        $atm_list = DB::table('stores')->where('cat_id','2')->get();
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

    public function insertFx(Request $request)
    {
        $fx_id = $request->fx_id;
        $region = $request->region;
        $township = $request->township;
        $name = $request->name;
        $list_address = $request->list_address;
        $openinghour = $request->openinghour;
        
        $stores = new Stores;
        $stores->region = $region;
        $stores->township = $township;
        $stores->name = $name;
        $stores->list_address = $list_address;
        $stores->openinghour = $openinghour;
        $stores->cat_id = '3';
        $stores->created_by = auth()->user()->id;
        $stores->updated_by = auth()->user()->id;
        $stores->save();

        $fx_list = DB::table('stores')->where('cat_id','3')->get();
        return view('admin.location.fx')->with('fx_list',$fx_list);
       
    }

    public function fxAdd ()
    {
        $fx_list = DB::table('stores')->where('cat_id','3')->get();
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
            $name = $request->branch_name;
            $list_address = $request->list_address;
            $telephone = $request->telephone;
            $latitude = $request->latitude;
            $longitude = $request->longitude;
            $fax = $request->fax;
            
            // $branch = DB::table('stores')->where('id', $branch_id)->first();
            $branch = DB::table ('stores')
                ->where('id', $branch_id)
                ->update ([
                    'region' => $region,
                    'name' => $name,
                    'list_address' => $list_address,
                    'telephone' => $telephone,
                    'latitude' => $latitude,
                    'longitude' => $longitude,
                    'fax' => $fax,
                    'updated_by' => auth()->user()->id
                ]);
                $branch_list = DB::table('stores')->where('cat_id', '1')->get();
                return redirect('/admin/location/branch-location');
        }

    public function branchDelete(Request $request) 
    {
        $branch_id = $request->branch_id;
        $user_id = auth()->user()->id;
        DB::table('stores')->where('id', $branch_id)->delete();
        $branch_list = DB::table('stores')->where('cat_id', '1')->get();
        return redirect('/admin/location/branch-location');
    }

    public function atmUpdate(Request $request)
        {
            $atm_id = $request->atm_id;
            $region = $request->region;
            $township = $request->township;
            $name = $request->name;
            $list_address = $request->list_address;
            
            $atm = DB::table ('stores')
                ->where('id', $atm_id)
                ->update ([
                    'region' => $region,
                    'township' => $township,
                    'name' => $name,
                    'list_address' => $list_address,
                    'updated_by' => auth()->user()->id

                ]);
                $atm_list = DB::table('stores')->where('cat_id','2')->get();
                return redirect('/admin/location/atm-location');
        }

    public function atmDelete(Request $request) 
    {
        $atm_id = $request->atm_id;
        $user_id = auth()->user()->id;
        DB::table('stores')->where('id', $atm_id)->delete();
        $atm_list = DB::table('stores')->where('cat_id', '2')->get();
        return redirect('/admin/location/atm-location');
    }

    public function faxUpdate(Request $request)
        {
            $fx_id = $request->fx_id;
            $region = $request->region;
            $township = $request->township;
            $name = $request->name;
            $list_address = $request->list_address;
            $openinghour = $request->openinghour;
            
            $fx = DB::table ('stores')
                ->where('id', $fx_id)
                ->update ([
                    'region' => $region,
                    'township' => $township,
                    'name' => $name,
                    'list_address' => $list_address,
                    'openinghour' => $openinghour,
                    'updated_by' => auth()->user()->id

                ]);
                $fx_list = DB::table('stores')->where('cat_id','3')->get();
                return redirect('/admin/location/fx-location');
        }

        public function faxDelete(Request $request) 
        {
            $fx_id = $request->fx_id;
            $user_id = auth()->user()->id;
            DB::table('stores')->where('id', $fx_id)->delete();

            $fx_list = DB::table('stores')->where('cat_id','3')->get();
            return redirect('/admin/location/fx-location');
        }


}



