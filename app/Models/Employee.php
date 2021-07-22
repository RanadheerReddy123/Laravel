<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Employee extends Model
{
    use HasFactory;
    protected $table='employee2s';
    protected $fillable=['name','mobile','email','address','comment','created_at','updated_at'];
    public static function getEmployee(){
        $records=DB::table('employee2s')->select('id','name','mobile','email','address','comment','created_at','updated_at')->get()->toArray();
        return $records;
    }
}
