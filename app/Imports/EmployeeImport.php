<?php

namespace App\Imports;
use App\Models\Employee2;
use App\Employee;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\withHeadingRow;

class EmployeeImport implements ToModel,withHeadingRow
{
    public function model(array $row)
    {   
        $name=$row['name'];
        $mobile=$row['mobile'];
        $email=$row['email'];
        $address=$row['address'];
        $comment=$row['comment'];
        return new Employee2([
            //'data'=>$row['name'].','.$row['mobile'].','.$row['email'].','.$row['address'].','.$row['comment'],
            'data'=>'Name: '.$name.',Mobile: '.$mobile.',Email: '.$email.',Address: '.$address.',Comment: '.$comment,
        ]);
        
        }
    }

