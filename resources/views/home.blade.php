@extends('layouts.main')

@section('container')

<div id="cc" class="carousel slide shadow" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#cc" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#cc" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#cc" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        @foreach ( $posts as $post )

      <div class="carousel-item active">
          @if ($post->image)
          <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid">
          @else
          <img src="https://source.unsplash.com/1200x400/?{{ $post->name }}" alt="" class="img-fluid">
          @endif

        <div class="carousel-caption d-none d-md-block">
          <h5>{{ $post->title }}</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#cc" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#cc" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


@endsection
