@extends('plantillaweb')

@section('secciondinamica')
<h1>Editar Empleado {{$edEmpleado->id}}</h1>
@if (session('Mensaje'))
    <div class="alert.alert-success">{{session('Mensaje')}}</div>
@endif

  <form action="{{route('empleados.update', $edEmpleado)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    @error('nombre')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      El nombre es requerido
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @enderror

<input type="text" name="id" placeholder="No." class="form-control mb-2" value=""><br>
  <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{$edEmpleado->nombre}}"><br>
    <input type="email" name="email" placeholder="Email" class="form-control mb-2" value="{{$edEmpleado->email}}"><br>
    <input type="text" name="fecha_alta" placeholder="Fecha ingreso" class="form-control mb-2" value="{{$edEmpleado->fecha_alta}}"><br>
    <input type="file" name="foto" placeholder="Foto" class="form-control mb-2" value="{{$edEmpleado->foto}}"><br><br>
    <button class="btn btn-primary btn-block" type="submit">Editar</button><br>
  </form>

@endsection