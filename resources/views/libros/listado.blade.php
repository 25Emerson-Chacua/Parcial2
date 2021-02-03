@section('content')
@extends('layout.master')


@if(count($libro)==0)
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

    </div>


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ISBN</th>
            <th scope="col">Titulo </th>
            <th scope="col">Stock </th>
            <th scope="col">Estado </th>
            <th scope="col">Editorial </th>
            <th scope="col">Precio </th>
            <th scope="col">Descuento </th>
        </tr>
    </thead>
    <tbody>
    @foreach($libro as $c)
      
            <tr>
            <td> {{ $c->id }} </td>
            <td> {{ $c->ISBN }} </td>
            <td> {{ $c->titulo }} </td>
            <td> {{ $c->stock }} </td>
            @if($c->stock==0)
                <td> agotado </td>
            @else
                @if($c->stock<=1 || $c->stock<=10)
                <td> ultimas undades </td>
               @else                   
                <td> Disponisble</td>
             @endif
             @endif
            <td> {{ $c->nombre }} </td>
            <td> {{ $c->precio }} </td>
 
            <td> 
                <a href="" class="btn btn-primary" > Editar </a>
                
                
                                <!-- Last name -->
                                <div class="btn-group pull-right">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                                    <i class="fa fa-question-circle"></i> Eliminar
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-body">
                                                <b>Esta seguro de eliminar?</b>
                                        </div>
                                        <div class="modal-footer" >
                                        <a href=""  class="btn btn-danger" > Si </a>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
            </td>
            
            </tr>
        
    @endforeach
    </tbody>
</table
@endif
@stop
