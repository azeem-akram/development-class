<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function(){
    $ctrl = new StudentController();
    return $ctrl->getName();
});


Route::get('test-view', function(){
    return view('testview');
});



//Route::get('students', StudentController::class);: 
// index(), create(), store(), delete()