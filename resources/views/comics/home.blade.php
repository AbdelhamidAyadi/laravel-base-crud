@extends('layouts.layout')
@section('title')
    Home
@endsection
@section('content')
<ul class="nav nav-pills m-3 justify-content-center">
  <li class="nav-item">
      <a class="nav-link bg-primary text-white " aria-current="page" href="{{ route('comics.create') }}"><i class="fa-solid fa-circle-plus mx-1"></i>ADD NEW COMIC</a>
  </li>
</ul>
<div class="container d-flex flex-wrap ">
    @forelse ($comics as $comic)
    <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ $comic -> thumb }}" class="card-img-top" alt="...">
        </div>
          <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Title: {{ $comic -> title }}</h5>
                <p class="card-text">Description: {{ $comic -> description }}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Price: {{ $comic -> price }}$</li>
                <li class="list-group-item">Series: {{ $comic -> series }}</li>
                <li class="list-group-item">Sale date: {{ $comic -> sale_date }}</li>
                <li class="list-group-item">Type: {{ $comic -> type }}</li>
            </ul>
            <div class="card-body">
                <a href="{{ route('comics.show' , $comic->id) }}" class="btn btn-primary">Show more</a>
                <form action="{{ route('comics.destroy' , $comic->id) }}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-danger my-2">DELETE</button>
                </form>
                <a href="{{ route('comics.edit' , $comic->id) }}" class="btn btn-warning">EDIT</a>

            </div>
          </div>
        </div>
      </div>
    @empty

    @endforelse
</div>
@endsection