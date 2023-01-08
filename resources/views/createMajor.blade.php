@extends('template')

@section('title', 'Create Major')

@section('body')

<div class="m-5">
    <h1 class="text-center">Input Major</h1>
    <form action="/storeMajor" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Major</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



@endsection
