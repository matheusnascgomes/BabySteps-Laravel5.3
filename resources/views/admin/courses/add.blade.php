@extends('layout.site')

@section('title','Cadastro')

@section('content')
<div class="container center">
  <h3>Cadastro</h3>

  <div class="row">
    <form class="" action="{{ route('admin.courses.save') }}" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}
        @include('admin.courses._form')

        <button class="btn deep-orange" >Salvar</button>
    </form>
  </div>

</div>

@endsection
