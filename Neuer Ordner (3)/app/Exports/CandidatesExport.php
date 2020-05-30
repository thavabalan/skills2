<?php

namespace App\Exports;

use App\Candidate;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CandidatesExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Candidate::all();
    }
    public function headings(): array
   {
       return [
           'Id',
           'Knowledge Level',
           'Highest Certificate',
           'Experience',
           'No of Projects',
           'Comment',
           'Created_at',
           'Modified_at',
           'Email',
       ];
   }
}
