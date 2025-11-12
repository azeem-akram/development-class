<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index()
    {
        $code = "<div>
        <p>This is a first paragraph</p>
        <p>This is a second paragraph</p>
        <p>This is a third paragraph</p>
        <p>This is a fourth paragraph</p>
        <p>This is a fifth paragraph</p>
        <ul>
            <li>List item 1</li>
            <li>List item 2</li>
            <li>List item 3</li>
        </ul>
        </div>";

        $students = [
            [
                "name" => "John Doe",
                "age" => 20,
                "email" => "johndoe@gmail.com"
            ],
            [                
                "name" => "Jane Smith",
                "age" => 22,
                "email" => "jane@gmail.com"
            ],
            [
                "name" => "John Doe",
                "age" => 20,
                "email" => "johndoe@gmail.com"
            ],
            [                
                "name" => "Jane Smith",
                "age" => 22,
                "email" => "jane@gmail.com"
            ],
            [
                "name" => "John Doe",
                "age" => 20,
                "email" => "johndoe@gmail.com"
            ],
            [                
                "name" => "Jane Smith",
                "age" => 22,
                "email" => "jane@gmail.com"
            ]
        ];




        $data = [
            "name" => "Laravel",
            "description" => "Laravel is a web application framework with expressive, elegant syntax.",
            "code" => $code,
            "students" => $students,
            "isAdmin" => false,
            "role" => "guest",
        ];

        return view('index', $data);
    }


    function upload()
    {
        return view('upload');
    }

    function uploadFile(Request $request)
    {
        $path = $request->file('image')->store('uploads', 'public');

        return view('upload', [
            'success' => true, 
            'msg' => 'File uploaded successfully!', 
            'path' => $path
        ]);
    }
}
