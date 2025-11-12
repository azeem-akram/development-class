Lecture 66
-------------------

1) Laravel Blade Templates
<?php echo $name ?php> (Normal PHP file)
|
{{$name}} (Laravel blade template)

To use blade templating we need that extension inside name of the file.
For example: index.php should be index.blade.php


- Echo out variable
    Syntax {{ $name }}

- Echo out code
    Synatx {!! $code !!}

- Arrays & Loops
    If you submit array to the frontend, we can iterate that array with PHP blade templating
    Syntax: 
    @foreach($students as $student)

    @endforeach

- If conditon
    Syntax:
    --- Single if
    @if($isAdmin)
        <p>You are an admin</p> 
    @else
        <p>You are not an admin</p>
    @endif


    -- Multiple if
    @if($role == 'admin')
        <p>You are an admin</p>
    @elseif($role == 'user')
        <p>You are a user</p>  
    @elseif($role == 'guest')
        <p>You are a guest</p>
    @else
        <p>Unknown role</p>
    @endif


- Isset funtion 
    To check if variable is set
    Syntax:
    @isset($success)

    @endisset


- CSRF token
    Syntax:
    @csrf



- Inheritance
    Getting everthing from one view to another
    Syntax:
    --- In parent view
    @yield('title')
    @yield('content')
    
    --- In Child view
    @section('title')
    @section('content')
        <All the content>
    @endsection




2) Laravel file uplaod
Its a way to upload files submitted from the user but <input> of type file