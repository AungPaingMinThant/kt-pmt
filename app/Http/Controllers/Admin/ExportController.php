<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MemberExport;
use App\Models\Member;

class ExportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function export()
    {
        return view('admin.export.list');
    }
    public function exportData(Request $request)
    {
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');
      
        $exportedData = Member::whereBetween('created_at', [$fromDate, $toDate])->get();
        return Excel::download(new MemberExport($exportedData), 'members.xlsx');
    }
}


