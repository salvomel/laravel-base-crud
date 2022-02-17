@extends('layouts.app')

@section('main_content')

    <div class="container">
        <div class="home-wrapper">

            @foreach ($comics as $comic)
    
                <div class="card mb-3 my-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="{{ $comic->title }}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic->title }}</h5>
                                <p class="card-text"><a href="{{ route('comics.show', ['comic' => $comic->id]) }}">Go to Comics Details</a></p>
                                <p class="card-text"><small class="text-muted">Sale Date: {{ $comic->sale_date }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
    
            @endforeach

        </div>
    </div>

@endsection



