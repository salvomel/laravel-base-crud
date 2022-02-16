@extends('layouts.app')

@section('main_content')

<div class="container">
    <h1>Comics List</h1>

    @foreach ($comics as $comic)
        <div>
            <h2>
                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">{{ $comic->title }}</a>
            </h2>
            <div>Series: {{ $comic->series }}</div>
        </div>
    @endforeach
</div>

@endsection