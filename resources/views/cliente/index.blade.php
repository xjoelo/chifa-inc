@extends('layouts.layout')

@section('content')
	<div class="container">
		<div class="row text-center">
			<div class="col-sm-12 col-md-6">Logo</div>
			<div class="col-sm-12 col-md-6">Registro</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-6"></div>
			<div class="col-sm-12 col-md-6">
				
				<form autocomplete="off" method="post" action="{{ route('registarCliente') }}">
					@method('POST')
					@csrf
					<div class="form-group">
						<label for="nombres">NOMBRES *</label>
						<input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres..." value=" {{old('nombres') }} ">
						@error('nombres') <i class="text-danger">{{$message}}</i>  @enderror
					</div>
					<div class="form-group">
						<label for="celular">CELULAR *</label>
						<input type="text" class="form-control" id="celular" name="celular" placeholder="N° de Celular" value=" {{old('nombres') }} ">
						@error('celular') <i class="text-danger">{{$message}}</i>  @enderror
					</div>
					<div class="form-group">
						<label for="email">CORREO *</label>
						<input type="text" class="form-control" id="email" name="email" placeholder="name@example.com" value=" {{old('nombres') }} ">
						@error('email') <i class="text-danger">{{$message}}</i>  @enderror
					</div>
					<div class="form-group">
						<label for="direccion">DIRECCIÓN *</label>
						<textarea class="form-control" id="direccion" name="direccion" rows="3"></textarea>
						@error('direccion') <i class="text-danger">{{$message}}</i>  @enderror
					</div>
					<button type="submit" class="btn btn-success">Guardar</button>
				</form>
			</div>
		</div>
	</div>
@endsection