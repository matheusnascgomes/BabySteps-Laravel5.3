@extends('layout.site')

@section('title','Cursos')

@section('content')
<div class="container center">
  <h3>Lista de Cursos</h3>

  <div class="row">
    <table>
      <thead>
        <tr>
          <th>Imagem</th>
          <th>#id</th>
          <th>Título</th>
          <th>Descrição</th>
          <th>Valor</th>
          <th>Publicado</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
        @foreach($registers as $register)
        <tr>
          <td><img width="120" src="{{ assets($register->image) }}" alt="{{ $register->title }}"></td>
          <td>{{ $register->id }}</td>
          <td>{{ $register->title }}</td>
          <td>{{ $register->description }}</td>
          <td>{{ $register->value }}</td>
          <td>{{ $register->published }}</td>
          <td>
            <a class="btn deep-orange" href="{{ route('admin.courses.update.show', $register->id) }}">Editar</a>
            <a class="btn red" href="{{ route('admin.courses.delete',$register->id) }}"></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="row">
    <a class="btn blue" href="{{ route('admin.courses.add') }}" >Cadastrar</a>
  </div>
</div>

@endsection
