<?php
namespace App\Imports;
use App\Models\Employee;
use App\Employee;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\withHeadingRow;

class Employee2Import implements ToModel,withHeadingRow
{  
    public function model(array $row)
    {
        return new Employee([
            'name'=>$row['name'],
            'mobile'=>$row['mobile'],
            'email'=>$row['email'],
            'address'=>$row['address'],
            'comment'=>$row['comment']
        ]);
    }
}