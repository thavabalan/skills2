<?php

namespace App\Exports;

use App\Company;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class CompaniesExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Company::all();
    }
    public function headings(): array
   {
       return [
           'Id',
           'Company ID',
           'Experience',
           'Skills',
           'Created_at',
           'Modified_at',
       ];
   }
}
