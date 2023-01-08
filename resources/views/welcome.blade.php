@extends('template')

@section('title', 'welcome')

@section('body')


@foreach ($mahasiswas as $mahasiswa)
    <div class="card" style="margin: 6rem">
        <div class="card-body">
            <img src="{{asset('/storage/Flazz/'.$mahasiswa->image)}}" class="card-img-top" style="width: 100px">
            <h5 class="card-title">{{$mahasiswa->Name}}</h5>
            <p class="card-text">{{$mahasiswa->NIM}}</p>
            <p class="card-text">{{$mahasiswa->GPA}}</p>
            <a href="{{route('show', $mahasiswa->id)}}"><button>Show</button></button></a>
            <a href="{{route('edit', $mahasiswa->id)}}" class="btn btn-success">Edit</a>
            <form action="/delete/{{$mahasiswa->id}}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endforeach


@endsection
