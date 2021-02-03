@section('content')
@extends('layout.master')
<h1> Formulario de Actualizacion </h1>

<form action="{{route('actualizarEditorial', $editorial->id )}}" method= "POST">
    @csrf
    <!-- Etiquetas de tipo text con un value asignado -->
    <div class="form-group">
        <label for="nombrePro">Nombre </label>
        <input type="text" id="nombre" name="nombre" value="{{$editorial->nombre}}" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>

     <!-- Etiquetas de tipo number -->
    <div class="form-group">
        <label for="cantidadPro">direccion </label>
        <input type="text" id="direccion" name="direccion" value="{{$editorial->direccion}}"  class="form-control" placeholder="Cantidad">
    </div>
    <div class="form-group">
        <label for="cantidadPro">telefono </label>
        <input type="text" id="telefono" name="telefono" value="{{$editorial->telefono}}"  class="form-control" placeholder="Cantidad">
    </div>
    <div class="form-group">
        <label for="cantidadPro">Ciudad </label>
        <input type="text" id="ciudad" name="ciudad" value="{{$editorial->ciudad}}"  class="form-control" placeholder="Cantidad">
    </div>

    <br> <br>
     <!-- Etiquetas de tipo button -->
    <button type="submit" class="btn btn-primary">Actualizar</button>
    <button type="reset" class="btn btn-secondary">Limpiar</button>
    <button type="button" class="btn btn-danger">Cancelar</button>
</form>


@stop