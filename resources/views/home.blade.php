@extends('layouts.app')

@section('title', 'Homepage')

@section('main-content')
<h1>
    Home view
</h1>

<a href="{{ route('profile') }}">
    <h3>
        {{ $title }}
    </h3>
</a>
@endsection