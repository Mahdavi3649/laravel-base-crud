@extends('layouts.app')


@section('content')

    <div class="container">

        <div class="heading d-flex justify-content-between align-items-center mb-5">
            <h1 class="p-4 fw-bolder text-success">Archive Comics</h1>
            <a name="" id="" class="btn btn-success d-block" href="{{route('comics.create')}}">Create Comic</a>
        </div>
        
            <table class="table fs-6">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Thumb</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Series</th>
                        <th>Sale date</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
            
                @foreach($comics as $comic)
                    <tr>
                        <td scope="row">{{$comic->id}}</td>
                        <td><img width="60" src="{{$comic->thumb}}" alt=""></td>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->type}}</td>
                        <td><a href="{{route('comics.show', $comic->id)}}">View</a> - Edit - Delete</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>

@endsection