 @extends('layouts.app')
@section('content')
    <div class="container">
    <h3>Editar post:</h3>
    <form action="{{ route('post.update', ['post' => $post->id_post]) }}" method="post">
    @method('PUT')
        <label for="titulo">Titulo</label>
        <input type="text" value="{{$post->titulo}}" 
            class="form-control" id="titulo"> 
        <label for="contenido">Contenido</label>
        <textarea name="contenido" id="contenido" 
            class="form-control" >{{$post->contenido}}
        </textarea>
        <label for="id_autor">Autor</label>
        <select name="id_autor" id="id_autor" class="form-control">
            @foreach ($post as $items)
                <option value="{{ 'usuario'->'id_post'}}">{{ $items->name }} ({{ $items->email }}) </option>
            @endforeach
    
        </select>

        <hr>
        <button class="btn btn-success">Actualizar</button>
    </form> 
    @endsection

