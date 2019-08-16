

@extends('layouts.app')
@include('admin.template.partial.nav')
@section('content')

    
   
   
    <script src="{{ asset('plugins/jquery/js/jquery-migrate-1.4.1.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                    <div class="card-body">
                        @if (session('status'))
                       <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <div class="card-header"><h1>Bienvenido</h1></div>
                <h5 class=".c.a" class="card-header">Estamos saludando desde tu pág de inicio.!</h5>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModalScrollable">
  Información&raquo;
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Mi Perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Ahora te encuentras en el inicio de tu perfil.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close &raquo;</button>
      </div>
    </div>
  </div>
</div>
    </div>
                    </div>
            </div>
        </div>
    </div> 
</div>


@endsection
