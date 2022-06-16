@extends('layouts.app')


@section('content')

<div class="container m-5">
    <div class="row">
        <div class="col-4">
        <img class="img-fluid" width="250" src="{{$comic->thumb}}" alt="">
        </div>
        <div class="col-8 mt-5">
            <h2 class="mb-3 text-danger fw-bold">{{$comic->title}}</h2>
            <p>{{$comic->description}}</p>
            <h6>Type: {{$comic->type}}</h6>
            <p> {{$comic->price}} $</p>
        </div>
    </div>
            
</div>

    @endsection