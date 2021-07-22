<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee3 extends Model
{
    use HasFactory;
    protected $table='employee2s';
    protected $fillable=['name','mobile','email','address','comment'];
    public static function getEmployee(){
        $records=DB::table('employee2s')->select('id','name','mobile','email','address','comment')->get()->toArray();
        return $records;
    }
}
