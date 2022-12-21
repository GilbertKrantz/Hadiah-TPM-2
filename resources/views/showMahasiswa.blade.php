@extends('template')

@section('title', 'Show Book')

@section('body')

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$mahasiswas->Name}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$mahasiswas->NIM}}</h6>
        <p class="card-text">{{$mahasiswas->GPA}}</p>
    </div>
</div>

    
    
@endsection