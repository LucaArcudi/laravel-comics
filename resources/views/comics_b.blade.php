@extends('layouts.app')

@section('title', 'Comic')

@section('main-content')
<div class="container-lg">
    <div class="row justify-content-center">
        <a href="{{ route('comics_a') }}">
            <i class="fa-solid fa-grip p-5"></i>
        </a>
        @foreach ($comics as $comic)
        <div class="card p-0" style="width: calc(100%/3 );">
            <img class="card-img-top" src="{{ $comic['thumb'] }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"> {{ $comic['title'] }} </h5>
                <h6> {{ $comic['description'] }} </h6>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection