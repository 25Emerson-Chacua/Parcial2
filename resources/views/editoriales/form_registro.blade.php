@section('content')
@extends('layout.master')

<div class="container">
    <br> <br>
    <h3> Registro de Categorias </h3>
    <form action ="{{url('editorial/registro')}}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Nombre Categoria" aria-label="nombre" aria-describedby="basic-addon1" id="nombre" name="nombre" required>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Descripción" aria-label="descripcion" aria-describedby="basic-addon1" id="direccion" name="direccion" required>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Descripción" aria-label="descripcion" aria-describedby="basic-addon1" id="ciudad" name="ciudad" required>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Descripción" aria-label="descripcion" aria-describedby="basic-addon1" id="telefono" name="telefono" required>
        </div>

        <button type="submit" class="btn btn-success"> Registrar </button>

    </form>

</div>

@stop