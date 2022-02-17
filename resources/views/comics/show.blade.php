@extends('layouts.app')

@section('main_content')

<div class="container">
  <div class="details-container">

    <div class="card">
        <div class="card-header">
            Comics Details
        </div>
        <div class="card-body card-wrapper">
            
          <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
          <div>
              <h5 class="card-title">{{ $comic->title }}</h5>
              <div>Price: {{ $comic->price }} €</div>
              <div>Series: {{ $comic->series }}</div>
              <div>Type: {{ $comic->type }}</div>
              <p class="card-text">Description: {{ $comic->description }}</p>
              <div class="buttons">
                <a class="btn btn-primary" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Edit</a>
                <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post">
                  @csrf
                  @method('DELETE')

                  <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
              </div>
          </div>
        </div>
        <div class="card-footer text-muted">
            <div>Sale Date: {{ $comic->sale_date }}</div>
        </div>
    </div>
  </div>

</div>

@endsection

