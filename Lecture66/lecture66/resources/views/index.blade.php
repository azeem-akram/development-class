@extends('layout')
@section('title', 'Home Page - Laravel Blade Template')

@section('content')



<h1>{{ $name }}</h1>
<p>{{ $description }}</p>

<code>
{!! $code !!}
</code>


<ul>
    @foreach($students as $student)
        <li>{{ $student['name'] }} --- {{ $student['age'] }} --- {{ $student['email'] }}</li>
    @endforeach
</ul>


<table>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
    </tr>
    @foreach($students as $student)
        <tr>
            <td>{{ $student['name'] }}</td>
            <td>{{ $student['age'] }}</td>
            <td>{{ $student['email'] }}</td>
        </tr>
    @endforeach
</table>


<h1>If Else conditions in Blade templates</h1>

{{ $isAdmin }}

@if($isAdmin)
    <p>You are an admin</p> 
@else
    <p>You are not an admin</p>
@endif


@if($role == 'admin')
    <p>You are an admin</p>
@elseif($role == 'user')
    <p>You are a user</p>  
@elseif($role == 'guest')
    <p>You are a guest</p>
@else
    <p>Unknown role</p>
@endif


<h2>Go to upload file page</h2>
<a href="/upload">Go to Upload</a>



@endsection