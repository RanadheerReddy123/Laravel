<?php

namespace App\Exports;
use App\Models\Employee;
use App\Models\Employee2;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class Employee2Export implements FromCollection
{
    public function headings():array{
        return[
            'Id',
            'Name',
            'Mobile',
            'Email',
            'Address',
            'Comment'
        ];
    }
    
    public function collection()
    {
        //return Employee2::all();
        return collect(Employee::getEmployee());
    }
}
