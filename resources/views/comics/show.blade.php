@extends('layouts.app')

@section('main_content')

<div class="container">
    <div class="card" style="width: 18rem;">
        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
        <div class="card-body">
          <h5 class="card-title">{{ $comic->title }}</h5>
          <div>Price: {{ $comic->price }}</div>
          <div>Series: {{ $comic->series }}</div>
          <div>Sale Date: {{ $comic->sale_date }}</div>
          <div>Type: {{ $comic->type }}</div>
          <p class="card-text">{{ $comic->description }}</p>
        </div>
    </div>
</div
@endsection