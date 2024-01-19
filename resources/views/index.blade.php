@extends('layout')

@section('content')
<div class="container d-flex flex-column justify-content-center align-items-center">
    <div class="card d-flex align-items-center justify-content-center border border-success" style="width: 30rem; height: 18rem;">
        <form action="" method="POST" enctype="multipart/form-data" class="d-flex flex-column align-items-center justify-content-center">
            @csrf
            <h1>Drop file here</h1>
            <label for="file" class="btn btn-primary">
                Choose a file
                <input type="file" id="file" name="file" class="d-none">
            </label>
            <button type="submit" class="btn btn-success btn-upload mt-2" style="width: 10rem; height: 2.5rem">Upload</button>
        </form>
    </div>
    <button class="btn btn-info float-end mt-2" style="width: 8rem; height: 2.5rem">Export excel</button>
</div>



@endsection