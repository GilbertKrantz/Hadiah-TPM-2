@extends('template')

@section('title', 'Show Book')

@section('body')

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <img src="{{asset('/storage/Flazz/'.$mahasiswas->image)}}" class="card-img-top" style="width: 100px">
        <h5 class="card-title">{{$mahasiswas->Name}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$mahasiswas->NIM}}</h6>
        <p class="card-text">{{$mahasiswas->GPA}}</p>
        <p class="card-text">{{$mahasiswas->major->name}}</p>
    </div>
</div>



@endsection
