@extends('layout.site')

@section('title','Cursos')

@section('content')

<div class="container center">

  <div class="row">
    @foreach($courses as $course)
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img width="300px" height="300px" src="{{ asset($course->image) }}">
        </div>
        <div class="card-content">
          <span class="card-title">{{ $course->title }}</span>
          <p>{{ $course->description }}</p>
        </div>
        <div class="card-action">
          <a href="#">Leia mais...</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="row">
    {{ $courses->links() }}
  </div>
</div>

@endsection
