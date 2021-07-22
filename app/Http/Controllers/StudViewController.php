<?php
namespace App\Http\Controllers;
use Session;
use App\Models\Student;
use App\Models\StudInsert;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
class StudViewController extends Controller
{   
/*-----------------------------------------------------------------------------------------------------------------
                     Insert Data
------------------------------------------------------------------------------------------------------------------*/
    public function insert(Request $request){
        $user=new StudInsert;
        $user->firstname=$request->firstname;
        $user->surname=$request->surname;
        $user->email=$request->email;
        $user->mobile=$request->mobile;
        echo $user->save();
        $request->validate([
            'firstname'=>'required|min:3',
            'surname'=>'required|min:3',
            'email'=>'required|email',
            'mobile'=>'required|numeric'
        ]);
    }
/*----------------------------------------------------------------------------------------------------------
                         View Data
----------------------------------------------------------------------------------------------------------*/
        public function view(){
        $users = DB::select('select * from student');   
        return view('studview',['users'=>$users]);
        } 
/*-----------------------------------------------------------------------------------------------------------
                        Update Data
-----------------------------------------------------------------------------------------------------------*/
        
        public function showEdit(){
        $users = DB::select('select * from student');
        return view('stud_edit_view',['users'=>$users]);
        }
    
    
        public function show($id) {
        $users = DB::select('select * from student where id = ?',[$id]);
        return view('stud_update',['users'=>$users]);
        }
    
        
        public function edit(Request $request,$id) {
        //print_r($users);die;
        $firstname = $request->input('firstname');
        $surname = $request->input('surname');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        DB::update("update student set firstname = ?,surname = ?,email = ?,mobile = ? where id = ?",[$firstname,$surname,$email,$mobile,$id]);
        echo "Record updated successfully.<br/>";
        echo "<a href = '/edit-records'>Click Here</a> to go back.";
        }
/*-----------------------------------------------------------------------------------------------------------
                        Delete Data
-----------------------------------------------------------------------------------------------------------*/    
    
        public function showDelete(){
        $users = DB::select('select * from student');
        return view('stud_delete_view',['users'=>$users]);
        }
        public function destroy($id) {
        DB::delete('delete from student where id = ?',[$id]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/delete-records">Click Here</a> to go back.';
        }
        }