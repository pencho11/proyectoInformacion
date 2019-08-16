@extends('layouts.app')
@include('admin.template.partial.nav')
@section('content')


<div class="container">

    <h1>Exportando informacion de la base de datos al laravel</h1> 
    <h3>Aplicando un inner join en laravel:</h3>
    
    <table   class="table table-bordered">
    <thead  class="alert alert-primary" role="alert">   
        <tr>    
            <th  class="border border-dark">Id</th>
            <th class="border border-dark">Título</th>
            <th class="border border-dark">Descripción</th>
            <th class="border border-dark">Autor</th>
            <th class="border border-dark">Nombre</th>
            <th class="border border-dark">Operaciones</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach($post as $items)
        
        <tr>
        
            <td class="p-3 mb-2 bg-dark text-white"><span  class="border border-primary" ></span>{{$items->id_post}}</td>
            <td >{{$items->titulo}}</td>
            <td>{{$items->Contenido}}</td>
            <td>{{$items->usuario->email}}</td>
            <td>{{$items->usuario->name}}</td>
            
            <td>
                <a  href="{route('post.edit',['id'=>$items->id_post])}" class="btn warnin btn-sm">Editar</a>
                <a href="#" class="btn btn-danger btn-sm">Eliminar</a> 
            </td>
        </tr>
       
        @endforeach
    
    
    </tbody>
</table>

@endsection
