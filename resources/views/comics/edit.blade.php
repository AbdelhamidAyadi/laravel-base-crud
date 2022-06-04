@extends('layouts.layout')
@section('title')
    Edit
@endsection
@section('content')
<div class="container text-center">
    <h2 class=" w-25 m-auto rounded-pill font-monospace fw-bolder bg-warning my-5" >Edit </h2>
    <form action="{{ route('comics.update', $comic->id ) }}" method="POST">
        @method('PUT')
        @csrf
        <input class="d-block w-75" style="margin: 1rem auto;" type="text" name="title" placeholder="Insert the Title" value="{{ $comic -> title }}">
        <input class="d-block w-75"  style="margin: 1rem auto;" type="text" name="description" placeholder="Insert the Description" value="{{ $comic -> description }}">
        <input class="d-block w-75"  style="margin: 1rem auto;" type="text" name="thumb" placeholder="Insert the Thumb Url" value="{{ $comic -> thumb }}">
        <input class="d-block w-75 "  style="margin: 1rem auto;" type="text" name="price" placeholder="Insert the Price" value="{{ $comic -> price }}">
        <input class="d-block w-75 "  style="margin: 1rem auto;" type="text" name="series" placeholder="Insert the Series name" value="{{ $comic -> series }}">
        <input class="d-block w-75 "  style="margin: 1rem auto;" type="text" name="sale_date" placeholder="Insert the Sale date" value="{{ $comic -> sale_date }}">
        <input class="d-block w-75"  style="margin: 1rem auto;" type="text" name="type" placeholder="Insert the Comic type" value="{{ $comic -> type }}">
        <input type="submit" value="Send Data">
    </form>
</div>
@endsection