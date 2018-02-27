@extends('layout.site')

@section('title','Cadastro')

@section('content')
<div class="container center">
  <h3>Editar</h3>

  <div class="row">
    <form class="" action="{{ route('admin.courses.update',$registers->id) }}" method="post" enctype="multipart/form-data">

        <input type="hidden" name="_method" value="put">
        {{ csrf_field() }}
        @include('admin.courses._form')

        <button class="btn deep-orange" >Atualizar</button>
    </form>
  </div>

</div>

@endsection
