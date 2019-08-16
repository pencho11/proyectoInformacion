@extends('layouts.app')
@section('content')
<p>Productos en venta</p>

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
        </tr>    
    </thead>
    <tbody>
   
    @foreach($producto as $items)
    <tr>
        <td>{{$items->id_producto}}</td>
        <td>{{$items->nombre}}</td>
        <td>{{$items->precio}}</td>            
    </tr>
    @endforeach
    </tbody>
    </table>

@endsection


