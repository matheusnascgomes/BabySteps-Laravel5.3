@extends('layout.site')

@section('title','Cadastro')

@section('content')
<div class="container center">
  <h3>Login</h3>

  <div class="row">
    <form class="" action="{{ route('site.signin') }}" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="email" name="email" type="text" class="validate">
            <label for="email">Email</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">lock</i>
            <input id="password" type="password" name="password" class="validate">
            <label for="password">Senha</label>
          </div>
        </div>

        <button class="btn deep-orange" >Entrar</button>
    </form>
  </div>

</div>

@endsection
