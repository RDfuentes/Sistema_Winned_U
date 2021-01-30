@extends ('layouts.inicio')
@section ('contenido')

	<br><br>
	<div class="text-center">
		<div class="col-xs-12">
			<h3 class="text-center"><strong>FACTURA NO: {{$facturacion->no_factura}}</h3><br>
		</div>
	</div>

			{!!Form::model($facturacion ?? '',['method'=>'PATCH','route'=>['facturacion.update',$facturacion->id_factura]])!!}
            {{Form::token()}}
		
			<div class="row">

				<div class="col-lg-6 col-xs-12">
					<div class="form-group">
					<label for="">Cliente</label>
						<label name="id_cliente" id="" class="form-control" readonly="readonly" >
							@foreach ($clientes as $cli)
								@if($cli->id_cliente==$facturacion->id_cliente)
								<option value="{{$cli->nombre}}" selected>{{$cli->nombre." ".$cli->apellido}}</option>
								@endif 	
							@endforeach
						</label>
					</div>
				</div>
				
				<div class="col-lg-6 col-xs-12">
					<div class="form-group">
						<label for="fecha">Fecha</label>
						<input type="text" name="fecha" readonly="readonly"  required value="{{$facturacion->fecha}}"class="form-control">
					</div>
				</div>

				<div class="col-lg-12 col-xs-12">
					<div class="form-group">
					<label for="">Producto</label>
						<label name="id_producto" id="" class="form-control"  readonly="readonly">
							@foreach ($productos as $producto)
								@if($producto->id_producto==$facturacion->id_producto)
								<option value="{{$producto->id_producto}}" selected>{{$producto->producto." ".$producto->marca." ".$producto->modelo}}</option>
								@endif 	
							@endforeach
						</label>
					</div>
				</div>
				<div class="col-lg-4  col-xs-12">
					<div class="form-group">
						<label for=precio>Precio</label>
						<input type="number" name="precio"  readonly="readonly" required value="{{$facturacion->precio}}"class="form-control">
					</div>
				</div>
				<div class="col-lg-4 col-xs-12">
					<div class="form-group">
						<label for="cantidad">Cantidad</label>
						<input type="number" name="cantidad"  readonly="readonly"  required value="{{$facturacion->cantidad}}"class="form-control">
					</div>
				</div>
				<div class="col-lg-4 col-xs-12">
					<div class="form-group">
						<label for="total">Total</label>
						<input type="number" name="total"  readonly="readonly"  required value="{{$facturacion->total}}"class="form-control">
					</div>
				</div>

				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<button class="btn btn-dark" type="submit">Imprimir</button>
						<a class="btn btn-dark" href="{{ url('/facturacion') }}" >Cancelar</a>
					</div>
				</div>

	</div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection