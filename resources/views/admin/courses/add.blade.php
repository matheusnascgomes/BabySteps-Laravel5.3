@extends('layout.site')

@section('title','Cadastro')

@section('content')
<div class="container center">
  <h3>Cadastro</h3>

  <div class="row">
    <form class="" action="{{ route('admin.courses.add') }}" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}
        @include('admin.courses._form')

        <buttom class="btn deep-orange">Salvar</buttom>
    </form>
  </div>

</div>

@endsection
