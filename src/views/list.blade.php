@extends('master')

@section('title', 'Listado de usuarios')
@section('content')
<a href="/user/create" class="btn btn-primary">Crear Usuario</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
          <th scope="row">{{$user->id}}</th>
          <td>{{$user->name}}</td>
          <td>{{$user->password}}</td>
          <td>
            <a href="/user/{{$user->id}}" class="btn btn-primary">Mostrar</a>
          </td>
        </tr> 
      @endforeach
    </tbody>
  </table>
@endsection