@extends('layouts.app')


@section('content')

<div class="container m-5">
   <h3 class="fw-bold">Edit {{$comic->title}}</h3>
   
  @include('partials.errors')

        <form action="{{route('comics.update', $comic->id)}}" method="post">
            
            @csrf
            @method('PUT')

            <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Insert name of comics" aria-describedby="titleHelper" value="{{$comic->title}}">
            <small id="titleHelper" class="text-muted">Type comics name</small>

            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            </div>

            <div class="form-group">
            <label for="thumb">Thumb</label>
            <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="https://" aria-describedby="thumbHelper" value="{{$comic->thumb}}">
            <small id="thumbHelper" class="text-muted">Type comics image</small>


            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            </div>

            <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="price" aria-describedby="priceHelper" value="{{$comic->price}}">
            <small id="priceHelper" class="text-muted">Type comics price</small>


            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            </div>

            <div class="form-group">
            <label for="series">Series</label>
            <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" placeholder="series" aria-describedby="seriesHelper" value="{{$comic->series}}">
            <small id="seriesHelper" class="text-muted">Type comics series</small>

            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            </div>

            <div class="form-group">
            <label for="sale_date">Sale date</label>
            <input type="date" name="sale_date" id="sale_date" class="form-control @error('sale_date') is-invalid @enderror" placeholder="sale_date" aria-describedby="saleDateHelper" value="{{$comic->sale_date}}">
            <small id="saleDateHelper" class="text-muted">Type comics sale date</small>
            </div>

            <div class="form-group">
            <label for="type">Type</label>
            <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" placeholder="type" aria-describedby="typeHelper" value="{{$comic->type}}">
            <small id="typeHelper" class="text-muted">Type comics type</small>

            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            

            </div>

            <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="5">{{$comic->description}}</textarea>

            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            </div>

            <button type="submit" class="btn btn-success mt-4">Update Comic</button>
        </form>

</div>



@endsection