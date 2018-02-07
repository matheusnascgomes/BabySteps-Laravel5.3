@extends('layout.site')

@section('title','Contatos')

@section('content')
<h1>Contacts Here!</h1>
@foreach($contacts as $contact)
<ul>
  <li>{{$contact['name']}}</li>
  <li>{{$contact['phone']}}</li>
  <li>{{$contact['age']}}</li>
</ul>
@endforeach

@endsection
