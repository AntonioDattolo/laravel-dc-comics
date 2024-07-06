@extends('layouts.app')

@section('content')
<section class="container text-center">
    <h1 style="font-size: 45px">
        AGGIUNGI UN FUMETTO
    </h1>
   <form method="POST" action="{{route('comic.store')}}">
    @csrf
        <div class="mb-3">
            <label for="exampleInputTitle" class="form-label">TITLE</label>
            <input type="text" class="form-control" id="exampleInputTitle" name="title">
        </div>
        <div class="mb-3">
            <label for="exampleInputDescription" class="form-label">DESCRIPTION</label>
            <input type="text" class="form-control" id="exampleInputDescription" name="description">
        </div>
        <div class="mb-3">
            <label for="exampleInputThumb" class="form-label">THUMB</label>
            <input type="text" class="form-control" id="exampleInputThumb" name="thumb">
        </div>
        <div class="mb-3">
            <label for="exampleInputPrice" class="form-label">PRICE</label>
            <input type="text" class="form-control" id="exampleInputPrice" name="price">
        </div>
        <div class="mb-3">
            <label for="exampleInputSeries" class="form-label">SERIES</label>
            <input type="text" class="form-control" id="exampleInputSeries" name="series">
        </div>
        <div class="mb-3">
            <label for="exampleInputSaleDate" class="form-label">SALE DATE</label>
            <input type="text" class="form-control" id="exampleInputSaleDate" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="exampleInputType" class="form-label">TYPE</label>
            <input type="text" class="form-control" id="exampleInputType" name="type">
        </div>
        <div class="mb-3">
            <label for="exampleInputArtist" class="form-label">ARTIST</label>
            <input type="text" class="form-control" id="exampleInputArtist" name="artists">
        </div>
        <div class="mb-3">
            <label for="exampleInputWriters" class="form-label">WRITERS</label>
            <input type="text" class="form-control" id="exampleInputWriters" name="writers">
        </div>
    
        <button type="submit" class="btn btn-primary">ADD</button>
    </form>
    
</section>
@endsection
