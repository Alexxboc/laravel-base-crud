@extends('layouts.app')

@section('content')



<div class="container">
  <h1> Create a new comic</h1>
  @include('partials.errors')
  <!-- Puntare il form alla rotta POST store -->
  <form action="{{route('comics.store')}}" method="post">
    @csrf

    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="ex: Batman" aria-describedby="titleHelper" value="{{old('title')}}">
      <small id="titleHelper" class="text-muted">Type the comic name here</small>
      @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="thumb">Thumbnail</label>
      <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="ex: http://my-img.jpg" aria-describedby="thumbHelper" value="{{old('thumb')}}">
      <small id="thumbHelper" class="text-muted">Type the thumb image path here</small>
      @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="ex: 100€" aria-describedby="coverImageHelper" value="{{old('price')}}">
      <small id="coverImageHelper" class="text-muted">Type the cover image path here</small>
      @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" name="description" id="description" rows="5">
      {{old('cover_image')}}
      </textarea>
      @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Add comic</button>



  </form>
</div>

@endsection