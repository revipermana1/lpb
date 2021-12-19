@extends('layouts.main')

@section('container')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    @foreach ($posts as $item)
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$loop->index}}" class="{{$loop->iteration == 1 ? 'active' : ''}}" aria-current="true" aria-label="Slide 1"></button>
    @endforeach
  </div>
  <div class="carousel-inner">
    @foreach ($posts as $post)
      <div class="carousel-item {{$loop->iteration == 1 ? 'active' : ''}}">
        <img src="{{ asset('storage/' . $post->image ) }}" class="d-block w-100 img-fluid" alt="...">
      </div>
    @endforeach
   
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


@endsection
