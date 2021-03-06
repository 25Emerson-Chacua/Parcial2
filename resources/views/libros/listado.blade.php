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
 
            @if($c->m==1 || $c->m==5)
                <td> 
                
                <?php 

                $result1 = ($c->precio * 0.05 ); 
                echo" $result1"; 
              ?>
                </td>
               @else                   
                <td> 
                
                <?php 

                    $result2 = 0; 
                    echo" $result2"; 
                    ?>
                </td>
             @endif
            
            </tr>
        
    @endforeach
    </tbody>
</table
@endif
@stop
