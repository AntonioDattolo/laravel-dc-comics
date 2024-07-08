@extends('layouts.app')

@section('content')
<section class="container text-center">
    <h1 style="font-size: 45px">
        MODIFICA UN FUMETTO
    </h1>
   {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}
   <form method="POST" action="{{ route('comic.update', $comic->id) }}">
    @method('PUT')
    @csrf
    {{$comic->id}}
    <div class="mb-3">
        <label for="exampleInputTitle" class="form-label">TITLE</label>
        <input type="text" class="form-control" id="exampleInputTitle" name="title" value="{{$comic->title}}">
        @error('title')
            <div class="bg-danger rounded"> Incorrect format </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputDescription" class="form-label">DESCRIPTION</label>
        <input type="text" class="form-control" id="exampleInputDescription" name="description" value="{{$comic->description}}">
        @error('description')
            <div class="bg-danger rounded"> Incorrect format </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputThumb" class="form-label">THUMB</label>
        <input type="text" class="form-control" id="exampleInputThumb" name="thumb" value="{{$comic->thumb}}">
        @error('thumb')
            <div class="bg-danger rounded"> Incorrect format </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputPrice" class="form-label">PRICE</label>
        <input type="text" class="form-control" id="exampleInputPrice" name="price" value="{{$comic->price}}">
        @error('price')
            <div class="bg-danger rounded"> Incorrect format </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputSeries" class="form-label">SERIES</label>
        <input type="text" class="form-control" id="exampleInputSeries" name="series" value="{{$comic->series}}">
        @error('series')
            <div class="bg-danger rounded"> Incorrect format </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputSaleDate" class="form-label">SALE DATE</label>
        <input type="text" class="form-control" id="exampleInputSaleDate" name="sale_date" value="{{$comic->sale_date}}">
        @error("sale_date")  
            <div class="bg-danger rounded"> Incorrect date format - Y-M-D </div>
        @enderror 
        
    </div>
    <div class="mb-3">
        <label for="exampleInputType" class="form-label">TYPE</label>
        <input type="text" class="form-control" id="exampleInputType" name="type" value="{{$comic->type}}">
        @error('type')
            <div class="bg-danger rounded"> Incorrect format </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputArtist" class="form-label">ARTIST</label>
        <input type="text" class="form-control" id="exampleInputArtist" name="artist" value="{{$comic->artist}}">
        @error('artist')
            <div class="bg-danger rounded"> Incorrect format </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputWriters" class="form-label">WRITERS</label>
        <input type="text" class="form-control" id="exampleInputWriters" name="writers" value="{{$comic->writers}}">
        @error('writers')
            <div class="bg-danger rounded"> Incorrect format </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
</section>
@endsection
