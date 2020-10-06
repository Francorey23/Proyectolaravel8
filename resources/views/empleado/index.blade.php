@extends('plantillaweb')

@section('secciondinamica')
Inicio Mustra de Datos Empleado

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">email</th>
      <th scope="col">Fecha</th>
      <th scope="col">Foto</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datos as $dato)
        <tr>
        <th scope="row">{{$dato->id}}</th>
        <td>{{$dato->nombre}}</td>
        <td>{{$dato->email}}</td>
        <td>{{$dato->fecha_alta}}</td>
        <td>{{$dato->foto}}</td>
        <td><a href="{{url('/empleados/'.$dato->id.'/edit')}}"> <button type="button" class="btn btn-warning btn-sm">Editar</button></a>
        <form action="{{ route('empleados.destroy', $dato) }}" class="d-inline" method="POST">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
        </form> 
      </td>
        </tr>
    @endforeach
    
  </tbody>
</table>
@endsection
