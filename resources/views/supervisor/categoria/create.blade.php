@extends('layout.master')
@section('title', 'Crear')
@section('content')

<div class="container-fluid">
  <div class="panel shadow">
  <div class="inside">
    <form action="{{ url('/categoria') }}" method="POST" enctype="multipart/form-data">
      @csrf
    <center><h3>Nueva Categoria</h3></center>
   <div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="nombre">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">descripcion</label>
    <input type="text" name="descripcion" class="form-control" id="descripcion">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Imagen</label>
    <input type="file" name="imagen" class="form-control" id="imagen">
  </div>

  
  <center><input class="btn btn-success" type="submit" value="Enviar"></center> 
  
</form>
<a href="{{ url('/categoria') }}"><button class="btn btn-danger">Regresar</button></a>
</div>
  

@endsection