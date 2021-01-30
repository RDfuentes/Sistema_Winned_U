
<!-- ESTES ES EL NOMBRE DE LA IMAGEN O DISEÑO QUE SE MUESTRA ANTES DE ESTE CONTENIDO -->
@extends ('layouts.inicio')

<!-- ESTE ES EL NOMBRE LA SECCION -->
@section ('contenido')

<br><br>
<div class="text-center"> 
	<div class="col-xs-12">
	<h3 class="text-center"><strong>VENTAS REALIZADAS</strong> </h3><br>
		@include('facturacion.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table id="" class="table table-striped table-bordered table-condensed table-hover" rules="groups" frame="hsides">
				<thead class="text-center">
					<th>No.</th>
					<th>Numero de Factura</th>
					<th>Cliente</th>
					<th>Producto</th>
					<th>Acciones</th>
				</thead>
               @foreach ($facturacion as $factura)
				<tr>
					<td>{{ $factura->id_factura}}</td>
					<td>{{ $factura->no_factura}}</td>
					<td>{{ $factura->clientes}} {{ $factura->clientess}}</td>
					<td>{{ $factura->productos}} {{ $factura->productoss}} {{ $factura->productosss}}</td>
					<td>
						<a href="{{URL::action('FacturacionController@edit',$factura->id_factura)}}"><button class="btn btn-dark">Ver</button></a>
                        <a href="" data-target="#modal-delete-{{$factura->id_factura}}" data-toggle="modal"><button class="btn btn-dark">Eliminar</button></a>
					</td>
				</tr>
				@include('facturacion.modal')
				@endforeach
			</table>
		</div>
		{{$facturacion->render()}}
	</div>
</div>

@endsection