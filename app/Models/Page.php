<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Page extends Model
{
    public static function getuserData($id=0){
    if($id==0){
      $value=DB::table('student')->orderBy('id', 'asc')->get(); 
    }else{
      $value=DB::table('student')->where('id', $id)->first();
    }
    return $value;
  }
  public static function insertData($data){
    $value=DB::table('student')->where('username', $data['username'])->get();
    if($value->count() == 0){
      DB::table('student')->insert($data);
      return 1;
     }else{
       return 0;
     }
  }
  public static function updateData($id,$data){
    DB::table('student')
      ->where('id', $id)
      ->update($data);
  }
  public static function deleteData($id){
    DB::table('student')->where('id', '=', $id)->delete();
  } 
}
}
