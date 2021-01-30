
<!-- ESTES ES EL NOMBRE DE LA IMAGEN O DISEÑO QUE SE MUESTRA ANTES DE ESTE CONTENIDO -->
@extends ('layouts.inicio')

<!-- ESTE ES EL NOMBRE LA SECCION -->
@section ('contenido')

<br><br>
<div class="text-center"> 
	<div class="col-xs-12">
	<h3 class="text-center"><strong>PRODUCTOS</strong> </h3><br>
		@include('productos.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table id="" class="table table-striped table-bordered table-condensed table-hover" rules="groups" frame="hsides">
				<thead class="text-center">
					<th>Id</th>
					<th>Producto</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Precio Unitario</th> 
					<th>Existencias</th> 
					<th>Acciones</th>
				</thead>
               @foreach ($productos as $producto)
				<tr>
					<td>{{ $producto->id_producto}}</td>
					<td>{{ $producto->producto}}</td>
					<td>{{ $producto->marca}}</td>
					<td>{{ $producto->modelo}}</td>
					<td>{{ $producto->precio}}</td>
					<td>{{ $producto->descuento}}</td>

					<td>
						<a href="{{URL::action('ProductosController@edit',$producto->id_producto)}}"><button class="btn btn-dark">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$producto->id_producto}}" data-toggle="modal"><button class="btn btn-dark">Eliminar</button></a>
					</td>
				</tr>
				@include('productos.modal')
				@endforeach
			</table>
		</div>
		{{$productos->render()}}
	</div>
</div>

@endsection