@extends('template')

@section('title', 'welcome')

@section('body')


@foreach ($mahasiswas as $mahasiswa)
    <div class="card" style="margin: 6rem">
        <div class="card-body">
            <h5 class="card-title">{{$mahasiswa->Name}}</h5>
            <p class="card-text">{{$mahasiswa->NIM}}</p>
            <p class="card-text">{{$mahasiswa->GPA}}</p>
            <a href="{{route('show', $mahasiswa->id)}}"><button>Show</button></button></a>
        </div>
    </div>
@endforeach


@endsection