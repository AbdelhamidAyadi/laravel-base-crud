@extends('layouts.layout')
@section('title')
Details
@endsection
@section('content')
<h2 class=" w-25 m-auto rounded-pill text-center font-monospace fw-bolder bg-primary my-5" >Details</h2>
<div class="container d-flex justify-content-center my-5">   

  <div class="card w-50 " >
      <img src="{{ $comic -> thumb }}" class="card-img-bottom"  style="height: 40vw;"   alt="...">
      <div class="card-body">
        <h5 class="card-title">Title: {{ $comic -> title }}</h5>
        <p class="card-text">Description: {{ $comic -> description }}</p>
        <p class="card-text">Price: {{ $comic -> price }}</p>
        <p class="card-text">Series: {{ $comic -> series }}</p>
        <p class="card-text">Sales date:{{ $comic -> sale_date }}</p>
        <p class="card-text">Type: {{ $comic -> type }}</p>
        <form action="{{ route('comics.destroy' , $comic->id) }}" method="POST">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger my-2">DELETE</button>
        </form>
        <a href="{{ route('comics.edit' , $comic->id) }}" class="btn btn-warning">EDIT</a>

        
      </div>
      
    </div>
</div>
@endsection
