@extends('layouts.app')

@section('content')


<div class="container">
  <h1> Create a new comic</h1>
  <!-- Puntare il form alla rotta POST store -->
  <form action="{{route('comics.store')}}" method="post">
    @csrf
  
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="Batman" aria-describedby="titleHelper">
      <small id="titleHelper" class="text-muted">Type the comic name here</small>
    </div>
    <div class="form-group">
      <label for="thumb">Thumbnail</label>
      <input type="text" name="thumb" id="thumb" class="form-control" placeholder="https://myimage.png" aria-describedby="thumbHelper">
      <small id="thumbHelper" class="text-muted">Type the thumb image path here</small>
    </div>
    <div class="form-group">
      <label for="cover_image">Cover Image</label>
      <input type="text" name="cover_image" id="cover_image" class="form-control" placeholder="https://myimage.png" aria-describedby="coverImageHelper">
      <small id="coverImageHelper" class="text-muted">Type the cover image path here</small>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" name="description" id="description" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Add comic</button>



  </form>
</div>

@endsection