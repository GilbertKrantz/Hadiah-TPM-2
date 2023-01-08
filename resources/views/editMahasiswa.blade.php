@extends('template')

@section('title', 'Edit Mahasiswa')

@section('body')

<div class="m-5">
    <h1 class="text-center">Input Mahasiswa</h1>
    <form action="/update/{{$mahasiswa->id}}" method="POST">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Name" value="{{$mahasiswa->Name}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">NIM</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="NIM" value="{{$mahasiswa->NIM}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">GPA</label>
            <input type="number" step=".02" class="form-control" id="exampleInputPassword1" name="GPA" value="{{$mahasiswa->GPA}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Image</label>
            <input type="file" class="form-control" id="exampleInputPassword1" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



@endsection
