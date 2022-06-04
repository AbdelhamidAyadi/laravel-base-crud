@extends('layouts.layout')
@section('content')
<div class="container text-center">
    <h2 class=" w-25 m-auto rounded-pill  my-5 font-monospace fw-bolder bg-primary" >Create</h2>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <input class="d-block w-75" style="margin: 1rem auto;" type="text" name="title" placeholder="Insert the Title" value="">
        <input class="d-block w-75" style="margin: 1rem auto;" type="text" name="description" placeholder="Insert the Description" value="">
        <input class="d-block w-75" style="margin: 1rem auto;"name="thumb" placeholder="Insert the Thumb Url" value="">
        <input class="d-block w-75" style="margin: 1rem auto;" type="text" name="price" placeholder="Insert the Price" value="">
        <input class="d-block w-75" style="margin: 1rem auto;" type="text" name="series" placeholder="Insert the Series name" value="">
        <input class="d-block w-75" style="margin: 1rem auto;" type="text" name="sale_date" placeholder="Insert the Sale date" value="">
        <input class="d-block w-75" style="margin: 1rem auto;" type="text" name="type" placeholder="Insert the Comic type" value="">
        <input type="submit" value="Send Data">
    </form>
</div>
@endsection
