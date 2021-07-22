<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Employee2 extends Model
{
    use HasFactory;
    protected $table='employeedata';
    protected $fillable=['data','created_at','updated_at'];
    public static function getEmployee(){
        $records=DB::table('employeedata')->select('id','data','created_at','updated_at')->get()->toArray();
        return $records;
    }
}
