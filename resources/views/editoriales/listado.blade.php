@section('content')
@extends('layout.master')


@if(count($editorial)==0)
<br><br><br><br><br><br>
<div class="container" align="center"> 
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 70rem;">
                <div class="card-body">
                    <h1 class="card-title"> No hay categorias registradas aun</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br>
@else

<h1> Listado de libros </h1>

<div class="container" >
<a href="{{ route('form_registroEditoriales') }}" class="btn btn-primary" > REGISTAR </a>
    </div>


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Dirrecion </th>
            <th scope="col">ciudad </th>
            <th scope="col">telefono </th>
            <th scope="col">opcion </th>

        </tr>
    </thead>
    <tbody>
    @foreach($editorial as $c)
      
            <tr>
            <td> {{ $c->id }} </td>
            <td> {{ $c->nombre }} </td>
            <td> {{ $c->direccion }} </td>
            <td> {{ $c->telefono }} </td>
            <td> {{ $c->ciudad }} </td>
            <td> 
                <a href="{{route('form_actualizaEditorial', $c->id)}}" class="btn btn-primary" > Actualizar </a>
              
            </td>

 
            
            </tr>
        
    @endforeach
    </tbody>
</table
@endif
@stop
