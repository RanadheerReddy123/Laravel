<?php
namespace App\Http\Controllers;
use App\Models\Employee2;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Exports\Employee2Export;
use Excel;
use App\Imports\EmployeeImport;
use App\Imports\Employee2Import;
class EmployeeController extends Controller
{
    public function addEmployee(){
        $employee2s=[
            ['name'=>'Alice','mobile'=>'1234567890','email'=>'alice@gmail.com','address'=>'Hyd','comment'=>'first comment'],
            ['name'=>'Merina','mobile'=>'1234567892','email'=>'merina@gmail.com','address'=>'Sec','comment'=>'first comment'],            ['name'=>'John','mobile'=>'1234567891','email'=>'john@gmail.com','address'=>'Ban','comment'=>'first comment'],
            ['name'=>'Steven','mobile'=>'1234567893','email'=>'steven@gmail.com','address'=>'Mum','comment'=>'first comment'],
            ['name'=>'Mosh','mobile'=>'1234567894','email'=>'mosh@gmail.com','address'=>'War','comment'=>'first comment'],
        ];
        Employee2::insert($employee2s);
        return "Records are inserted";
    }
    public function exportIntoExcel(){
        return Excel::download(new Employee2Export,'employeelist.xlsx');
    }
    public function exportIntoCSV(){
        return Excel::download(new Employee2Export,'employeelist.csv');
    }
    public function importForm(){
        return view('import-form');
    }
    public function import(Request $request){
        Excel::import(new EmployeeImport,$request->file);
        //Excel::import(new Employee2Import,$request->file);
        return "Records are Imported successfully!";
    }
    public function import2(Request $request){
        //Excel::import(new EmployeeImport,$request->file);
        Excel::import(new Employee2Import,$request->file);
        return "Records are Imported successfully!";
    }
}
