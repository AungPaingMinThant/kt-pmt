<?php

  namespace App\Exports;

  use DB;

  use Maatwebsite\Excel\Concerns\FromCollection;
  use Maatwebsite\Excel\Concerns\Exportable;
  use Maatwebsite\Excel\Concerns\WithHeadings;



class MemberExport implements FromCollection {

    use Exportable;
    protected $exportedData;

    public function __construct($exportedData) {
        $this->exportedData = $exportedData;
    }

    // public function collection() {
    //     return $this->exportedData;
    // }

     public function headings(): array {
    return [

        "Member ID",
        "Name",
        "Phone No.",
        "Amount",
        "Member Point",
        "Membership Date",
       ];

    }

   public function collection(){

       $usersData = DB::table('Members')->get();
 

       return collect($usersData);

   }

}

