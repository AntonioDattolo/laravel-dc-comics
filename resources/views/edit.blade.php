@extends('layouts.app')

@section('content')
<section class="container text-center">
    <h1 style="font-size: 45px">
        AGGIUNGI UN FUMETTO
    </h1>
   <form method="POST" action="{{ route('index.update', $comic->id) }}">
    @method('PUT') 
    @csrf
    {{$comic->id}}
        <div class="mb-3">
            <label for="exampleInputTitle" class="form-label">TITLE</label>
            <input type="text" class="form-control" id="exampleInputTitle" name="title" value="{{$comic->title}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputDescription" class="form-label">DESCRIPTION</label>
            <input type="text" class="form-control" id="exampleInputDescription" name="description" value="{{$comic->description}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputThumb" class="form-label">THUMB</label>
            <input type="text" class="form-control" id="exampleInputThumb" name="thumb" value="{{$comic->thumb}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPrice" class="form-label">PRICE</label>
            <input type="text" class="form-control" id="exampleInputPrice" name="price" value="{{$comic->price}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputSeries" class="form-label">SERIES</label>
            <input type="text" class="form-control" id="exampleInputSeries" name="series" value="{{$comic->series}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputSaleDate" class="form-label">SALE DATE</label>
            <input type="text" class="form-control" id="exampleInputSaleDate" name="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputType" class="form-label">TYPE</label>
            <input type="text" class="form-control" id="exampleInputType" name="type" value="{{$comic->type}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputArtist" class="form-label">ARTIST</label>
            <input type="text" class="form-control" id="exampleInputArtist" name="artist" value="{{$comic->artist}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputWriters" class="form-label">WRITERS</label>
            <input type="text" class="form-control" id="exampleInputWriters" name="writers" value="{{$comic->writers}}">
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</section>
@endsection
