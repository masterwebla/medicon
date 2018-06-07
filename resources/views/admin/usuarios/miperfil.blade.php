@extends('admin.template')
@section('titulo','Usuarios')

@section('titulocontenido')
	<h1>Mi Perfil <small>Editar</small></h1>
@endsection

@section('contenido')
	<div class="container box box-success">
		@include('admin.secciones.errores')
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				{!!Form::open(['route'=>'miperfilAct','method'=>'post','files'=>'true'])!!}
					<div class="form-group">
						<label>Password</label>
						{!!Form::password('password',[
							'class'=>'form-control',
							'placeholder'=>'Su contraseña...'
						])!!}
					</div>
					<div class="form-group">
						<label>Foto de Perfil (jpg, png de máx 1 MB)</label>
						<input type="file" name="foto">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Actualizar</button>
					</div>
				{!! Form::close() !!}
				
			</div>
		</div>		
	</div>
@endsection
