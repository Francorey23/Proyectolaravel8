@extends('plantillaweb')

@section('secciondinamica')
<h3>Formulario para registro de productos</h3>
<form action="{{url('/productos')}}"  method="POST">
    @csrf

    <label>Codigo del producto</label>
    <input type="text"  name="codigo" placeholder="Codigo" class="form-control mb-2">
    
    <label>Nombre del producto</label>
    <input type="text"  name="nombre" placeholder="Nombre" class="form-control mb-2">
  
    <label>Descripcion</label>
    <input type="text"  name="descripcion" placeholder="Descripicion" class="form-control mb-2">
     
  <button type="submit" class="btn btn-primary btn-block">Insertar</button>
</form>

@endsection