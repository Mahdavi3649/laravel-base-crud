@extends('layouts.app')


@section('content')

<div class="container m-5">
   <h3 class="fw-bold">Create a new Article</h3>

        <form action="{{route('comics.store')}}" method="post">
            @csrf

            <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Insert name of comics" aria-describedby="titleHelper">
            <small id="titleHelper" class="text-muted">Type comics name</small>
            </div>

            <div class="form-group">
            <label for="thumb">Thumb</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="https://" aria-describedby="thumbHelper">
            <small id="thumbHelper" class="text-muted">Type comics image</small>
            </div>

            <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="price" aria-describedby="priceHelper">
            <small id="priceHelper" class="text-muted">Type comics price</small>
            </div>

            <div class="form-group">
            <label for="series">Series</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="series" aria-describedby="seriesHelper">
            <small id="seriesHelper" class="text-muted">Type comics series</small>
            </div>

            <div class="form-group">
            <label for="sale date">Sale date</label>
            <input type="text" name="sale date" id="sale date" class="form-control" placeholder="sale date" aria-describedby="saleDateHelper">
            <small id="saleDateHelper" class="text-muted">Type comics sale date</small>
            </div>

            <div class="form-group">
            <label for="type">Type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="type" aria-describedby="typeHelper">
            <small id="typeHelper" class="text-muted">Type comics type</small>
            </div>

            <button type="submit" class="btn btn-success mt-4">Add Comic</button>
        </form>

</div>



@endsection