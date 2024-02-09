<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function records(string $id = null){
        $students = $id?Student::find($id):Student::all();
        return $students;
    }
    public function addStudent(Request $request){
            $add_Student = new student;
            $add_Student->name = $request->name;
            $add_Student->email = $request->email;
            $add_Student->phone = $request->phone;
            $add_Student->class = $request->class;
            $add_Student->age = $request->age;
            $add_Student->gender = $request->gender;
            $result =$add_Student->save();

            if($result){
                return ["massage" =>"Student added Successfully"];
            }else{
                return ["massage" =>"Please filed Correct Data."];

            }

    }
    public function updateStudent(Request $request, $id){
        $student = Student::find($id);
        //dd($student->toArray());
        $student->name  = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->class = $request->class;
        $student->age   = $request->age;
        $student->gender =$request->gender;

        $result = $student->save();
        if($result ){
            return ["massage" =>"Student Updated Successfully"];
        }else{
            return ["massage" =>"Something went wrong."];
        }
    }
    //delte student api.
    public function deleteStudent($id){
        $student = Student::find($id);
        $result =$student->delete();

        if($result){
            return ["massage"=>"Student Deleted successfully."];
        }else{
            return ["massage"=> "Something Went wrong."];
        }
    }
    //Student_Seach Api
    public function searchStudent(string $name){
        $student = Student::where('name',"like",$name."%")->get();

        if(count($student) > 0){
            return["data"=>$student,"massage" =>" student fetch successfully."];
        }else{
            return["massage" =>"No Record found"];
        }
    }
    //Student validation
    public function validation(Request $req){
        $rules = [
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "class" => "required",
            "age" => "required",
            "gender" => "required",
        ];
        $validator = Validator::make($req->all(), $rules);
        if($validator->fails()){
            
            return response()->json($validator->errors(),401);
        }else{
            return ["massage" => "Validation Successfully"];
            
        }
    }

}
