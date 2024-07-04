@extends('layouts.app')

@section('content')
<section class="container p-2 my-5">
    {{-- @foreach ($comics as $i=> $item) 
    <a style="text-decoration: none; color: whitesmoke;" href="index/{{$item->id}}">
        {{$item->title}}
    </a><br>
    @endforeach  --}}

    <table class="w-100">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Comics</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $i => $item)
            @include('partials.card')
            @endforeach
        </tbody>
    </table>
</section>
@endsection