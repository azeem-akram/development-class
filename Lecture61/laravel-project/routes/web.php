<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/students', function(){
    $ctrl = new StudentController();
    return view('students', ['students' => $ctrl->getAll()]);
});



Route::get('/students/{id}', function($id){
    $ctrl = new StudentController();

    $student = $ctrl->find($id);

    return view('student', ["student" => $student]);
});


// Get male student
Route::get('/get-male-students', [StudentController::class, 'getMaleStudents']);


Route::get('/get-all-teachers', [TeacherController::class, 'index']);
Route::post('/create-teacher', [TeacherController::class, 'create']);









// Route::get('test-view', function(){

//     $students = [
//         ["name" => "Azeem"],
//         ["name" => "Sayed"],
//         ["name" => "Fauzia"]
//     ];


//     return view('testview', ["students" => $students, "teachers" => ["Test Teachers Data"], "products" => ["Test products"]]);
// });





//Route::get('students', StudentController::class);: 
// index(), create(), store(), delete()