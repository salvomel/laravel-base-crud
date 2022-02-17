@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h2 class="create">Create New Comics</h2>

        {{-- Banner required fields --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            @method('POST')

            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Image url</label>
                <input type="url" class="form-control" id="thumb" name="thumb">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>

            <div class="mb-3">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection