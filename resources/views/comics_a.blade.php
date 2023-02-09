@extends('layouts.app')

@section('title', 'Homepage')

@section('main-content')
<div class="container-lg">
    <div class="row justify-content-center">
        <a href="{{ route('comics_b') }}">
            <i class="fa-solid fa-grip-vertical p-5"></i>
        </a>
        @foreach ($comics as $comic)
        <div class="card p-0" style="width: calc(100%/4 );">
            <img class="card-img-top" src="{{ $comic['thumb'] }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"> {{ $comic['title'] }} </h5>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection