<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $techers = Teacher::all();
        return view("teachers", ['teachers' => $techers]);
    }

    public function create(Request $request){
        Teacher::create($request->all());
        return "Teacher created successfully";
    }

    public function update(Request $request, $id){

        //Find the teacher by id
        $teacher = Teacher::find($id);

        //Check if teacher exists
        if($teacher){
            $teacher->update($request->all());
            return "Teacher updated successfully";
        }else{
            return "Teacher not found";
        }
    }

    public function delete($id){
        //Find the teacher by id
        $teacher = Teacher::find($id);

        //Check if teacher exists
        if($teacher){
            $teacher->delete();
            return "Teacher deleted successfully";
        }else{
            return "Teacher not found";
        }
    }


    public function getWebDevsTeachers()
    {
        // Get all teachers who teach web development
        $webDevsTeachers = Teacher::where('subject', 'Web Developement')->get();

        $webDevsTeachersFirst10Asc = Teacher::where('subject', 'Web Developement')->orderBy('name', 'desc')->limit(10)->get();


        dd($webDevsTeachersFirst10Asc);
    }






}
