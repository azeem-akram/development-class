@extends('layout')
@section('title', 'File Upload')

@section('content')

<div class="box">
    <h2>File Upload in Laravel</h2>
    <p>Here we will have a form to upload file in laravel project</p>
</div>


<div>
    @isset($success)
        @if($success)
            <div class="alert alert-success">
                File uploaded successfully!
                <br>
                <img src="/storage/{{ $path }}" alt="Uploaded Image" class="img-thumbnail" style="max-width: 200px;">
            </div>
        @else
            <div class="alert alert-danger">
                File upload failed!
            </div>
        @endif
    @endisset
</div>


<div clas="box">
    <form method="POST" action="/upload" enctype="multipart/form-data">
        @csrf
        <label>Choose a file</label>
        <input type="file" name="image" class="form-control">

        <br>
        <input type="submit" value="Upload" class="btn btn-primary">
    </form>
</div>


@endsection