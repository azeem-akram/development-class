<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getAll(){
        return Student::getAll();
    }


    public function find($id){
        return Student::find($id);
    }


}
