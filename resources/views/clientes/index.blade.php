
<!-- ESTES ES EL NOMBRE DE LA IMAGEN O DISEÑO QUE SE MUESTRA ANTES DE ESTE CONTENIDO -->
@extends ('layouts.inicio')

<!-- ESTE ES EL NOMBRE LA SECCION -->
@section ('contenido')

<br><br>
<div class="text-center"> 
	<div class="col-xs-12">
	<h3 class="text-center"><strong>CLIENTES</strong><br><br>

		<div>
			<a class="btn btn-block"  style="background-color:#00C851; color:white;" href="{{ url('clientes/create') }}">Nuevo Cliente</a>
		</div><br></h3>

		@include('clientes.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table id="" class="table table-striped table-bordered table-condensed table-hover" rules="groups" frame="hsides">
				<thead class="text-center">
					<th>NIT</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Direccion</th>
					<th>Telefono</th>
					<th>Correo</th> 
					<th>Acciones</th>
				</thead>
               @foreach ($clientes as $cliente)
				<tr>
					<td>{{ $cliente->nit}}</td>
					<td>{{ $cliente->nombre}}</td>
					<td>{{ $cliente->apellido}}</td>
					<td>{{ $cliente->direccion}}</td>
					<td>{{ $cliente->telefono}}</td>
					<td>{{ $cliente->correo}}</td>

					<td>
						<a href="{{URL::action('ClientesController@edit',$cliente->id_cliente)}}"><button class="btn btn-dark">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$cliente->id_cliente}}" data-toggle="modal"><button class="btn btn-dark">Eliminar</button></a>
					</td>
				</tr>
				@include('clientes.modal')
				@endforeach
			</table>
		</div>
		{{$clientes->render()}}
	</div>
</div>

@endsection