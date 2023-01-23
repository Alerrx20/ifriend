@extends('master')

@section('title', 'Crear usuarios')
@section('content')
    <h2>Datos del nuevo usuario</h2>
    <form action="/user" method="POST">
      <div class="mb-3">
        <label for="exampleInputName1" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="exampleInputName1" aria-describedby="nameHelp">
        <div id="nameHelp" class="form-text">Introduce un nombre para el usuario</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection