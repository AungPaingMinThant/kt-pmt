<?php

namespace App\Exports;
use App\Exports\MembersExport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use App\Models\Member;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class MembersExport implements FromCollection
{
    protected $fromDate;
    protected $toDate;

    public function __construct($fromDate, $toDate)
    {
        $this->fromDate = $fromDate;
        $this->toDate = $toDate;
    }

    public function collection()
{
    if ($this->fromDate && $this->toDate) {
        return Member::whereBetween('created_at', [
            Carbon::parse($this->fromDate)->startOfDay(),
            Carbon::parse($this->toDate)->endOfDay(),
        ])->get();
    } else {
        return Member::all();
    }
}
    public function headings(): array {
        
        return [
    
            "No",
    
            "Member ID",
    
            "Name",
    
            "Phone No",
    
            "Amount",
    
            "Points",
    
            "Created By",

            "Created at",

            "Updated By",

            "Updated at",
    
           ];
    
        }
    
}
