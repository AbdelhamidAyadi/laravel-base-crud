@extends('layouts.layout')
@section('content')
   <div class="container text-center">
    <form action="{{ route('comics.store') }}" method="POST" >
        @csrf
        <input class="d-block w-25 m-3" type="text" name="title" placeholder="Insert the Title" value="">
        <input class="d-block w-25 m-3" type="text" name="description" placeholder="Insert the Description" value="">
        <input class="d-block w-25 m-3" type="text" name="thumb" placeholder="Insert the Thumb Url" value="">
        <input class="d-block w-25 m-3" type="text" name="price" placeholder="Insert the Price" value="">
        <input class="d-block w-25 m-3" type="text" name="series" placeholder="Insert the Series name" value="">
        <input class="d-block w-25 m-3" type="text" name="sale_date" placeholder="Insert the Sale date" value="">
        <input class="d-block w-25 m-3" type="text" name="type" placeholder="Insert the Comic type" value="">
        <input type="submit" value="Send Data">
    </form>
   </div>
@endsection