@extends('layouts.app')

@section('content')
<section class="container d-flex flex-wrap">
    <h1 class="col-12 text-center p-1">
        {{$comic['title']}}
    </h1>
    <h3 class="col-12 text-center p-1">SERIES : {{$comic['series']}}</h3>
    <h5 class="col-12 text-center p-1">
        {{$comic['type']}}
    </h5>
    <div class="col-5 p-1">
        <img src="{{$comic['thumb']}}" style="object-fit: contain; width:100%;" alt="">
    </div>
    <div class="col-7 align-self-center p-5 " style="font-size: 27px;">
        <p>
            {{$comic['description']}}
        </p>
    </div>
    <div class="col-12 d-flex p-1">
        <h4 class="col-8">
            Sale Date :
            {{$comic['sale_date']}}
        </h4>
        <h5 class="col-4 text-end p-1" style="font-size: 35px;">
            {{$comic['price']}}
        </h5>
    </div>
</section>
@endsection
