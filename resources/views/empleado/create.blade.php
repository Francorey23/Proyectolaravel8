@extends('plantillaweb')

@section('secciondinamica')

  <form action="{{url('/empleados')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @error('nombre')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      El nombre es requerido
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @enderror

  <input type="text" name="id" placeholder="No." class="form-control mb-2"><br>
  <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{old('nombre')}}"><br>
    <input type="email" name="email" placeholder="Email" class="form-control mb-2" value="{{old('email')}}"><br>
    <input type="text" name="fecha_alta" placeholder="Fecha ingreso" class="form-control mb-2"><br>
    <input type="file" name="foto" placeholder="Foto" class="form-control mb-2"><br><br>
    <button class="btn btn-primary btn-block" type="submit">Insertar</button><br>
  </form>
@endsection  
