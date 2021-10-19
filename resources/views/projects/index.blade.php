@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 text-right">
			<a href="" class="btn btn-primary" data-toggle="modal" data-target="#modalProyectos">Crear Nuevo Proyecto</a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<h4>Mis proyectos</h4>
			<hr>
		</div>
		@foreach($projects as $project)
		<div class="col-md-4">
			<div class="card card-body mb-3">
				<h5>{{ $project->name }}</h5>
			</div>
		</div>
		@endforeach
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalProyectos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Nuevo Proyecto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="POST" action="{{ route('proyectos.store') }}">
      	{{ csrf_field() }}
	      <div class="modal-body">
	      	<div class="row">
	      		<div class="col-md-8">
	      			<div class="form-group">
			        	<label>Nombre</label>
			        	<input type="text" class="form-control" name="name" required="">
			        </div>
	      		</div>
	      		<div class="col-md-4">
	      			<div class="form-group">
	      				<label>Estado</label>
	      				<select class="form-control" name="status">
	      					<option value="En Proceso">En Proceso</option>
	      					<option value="Terminado">Terminado</option>
	      					<option value="Atrasado">Atrasado</option>
	      					<option value="Cancelado">Cancelado</option>
	      				</select>
	      			</div>
	      		</div>
	      	</div>
	        
	        <div class="form-group">
	        	<label>Descripción</label>
	        	<textarea class="form-control" name="description" rows="3"></textarea>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        <button type="submit" class="btn btn-primary">Guardar Proyecto</button>
	      </div>
      </form>
    </div>
  </div>
</div>
@endsection