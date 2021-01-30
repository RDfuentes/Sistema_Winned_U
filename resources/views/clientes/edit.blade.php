@extends ('layouts.inicio')
@section ('contenido')

	<br><br>
	<div class="text-center">
		<div class="col-xs-12">
			<h3 class="text-center"><strong>EDITAR CLIENTE</h3><br>
		</div>
	</div>

			{!!Form::model($clientes ?? '',['method'=>'PATCH','route'=>['clientes.update',$clientes->id_cliente]])!!}
            {{Form::token()}}
		
			<div class="row">

				<div class="col-lg-12 col-xs-12">
					<div class="form-group">
						<label for="nit">NIT</label>
						<input type="number" name="nit"  required value="{{$clientes->nit}}" class="form-control">
					</div>
				</div>
				<div class="col-lg-6 col-xs-12">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre"  required value="{{$clientes->nombre}}" class="form-control">
					</div>
				</div>
				<div class="col-lg-6 col-xs-12">
					<div class="form-group">
						<label for="apellido">Apellido</label>
						<input type="text" name="apellido"  required value="{{$clientes->apellido}}"class="form-control">
					</div>
				</div>
				<div class="col-lg-12 col-xs-12">
					<div class="form-group">
						<label for="direccion">Direccion</label>
						<input type="text" name="direccion"  required value="{{$clientes->direccion}}" class="form-control">
					</div>
				</div>
				<div class="col-lg-6  col-xs-12">
					<div class="form-group">
						<label for=telefono>Telefono</label>
						<input type="number" name="telefono"  required value="{{$clientes->telefono}}"class="form-control">
					</div>
				</div>
				<div class="col-lg-6 col-xs-12">
					<div class="form-group">
						<label for=correo>Correo</label>
						<input type="text" name="correo"  required value="{{$clientes->correo}}" class="form-control">
					</div>
				</div>

				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<button class="btn btn-dark" type="submit">Guardar</button>
						<a class="btn btn-dark" href="{{ url('/clientes') }}" >Cancelar</a>
					</div>
				</div>

	</div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection