<?php
namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public static function getuserData(){
    $value=DB::table('student')->orderBy('id', 'asc')->get();
    return $value;
  }
}
