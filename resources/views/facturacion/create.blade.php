@extends ('layouts.inicio')
@section ('contenido')

	<br><br>
	<div class="text-center">
		<div class="col-xs-12">
			<h3 class="text-center"><strong>NUEVA VENTA</strong></h3><br>
		</div>
	</div>
			{!!Form::open(array('url'=>'facturacion','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}

	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<div class="form-group">
            	<label for="no_factura">No de factura</label>
            	<input type="text" name="no_factura"  required value="{{old('no_factura')}}" class="form-control">
            </div>
		</div>
		<div class="col-lg-6 col-sm-4 col-md-4 col-xs-12">
			<div class="form-group">
				<label for="">Cliente</label>
				<select name="id_cliente" id="" class="form-control">
					<option value="">-- SELECCIONE CLIENTE --</option>
					@foreach ($clientes as $cli)
					<option value="{{$cli->id_cliente}}">{{$cli->nombre." ".$cli->apellido}}</option>
					@endforeach
				</select>
			</div>	
		</div>
		<div class="col-lg-6 col-xs-12">
			<div class="form-group">
            	<label for="fecha">Fecha</label>
            	<input type="date" name="fecha"  required value="{{old('fecha')}}" class="form-control">
            </div>
		</div>
		<div class="col-lg-12 col-sm-4 col-md-4 col-xs-12">
			<div class="form-group">
				<label for="">Producto</label>
				<select name="id_producto" id="" class="form-control">
					<option value="">-- SELECCIONE PRODUCTO --</option>
					@foreach ($productos as $producto)
					<option value="{{$producto->id_producto}}">{{$producto->producto." ".$producto->marca." ".$producto->modelo}}</option>
					@endforeach
				</select>
			</div>	
		</div>
		<div class="col-lg-4  col-xs-12">
			<div class="form-group">
            	<label for=precio>Precio</label>
            	<input type="number" name="precio"  required value="{{old('precio')}}" class="form-control">
            </div>
		</div>
		<div class="col-lg-4 col-xs-12">
			<div class="form-group">
            	<label for="cantidad">Cantidad</label>
            	<input type="number" name="cantidad"  required value="{{old('cantidad')}}" class="form-control">
            </div>
		</div>
		<div class="col-lg-4 col-xs-12">
			<div class="form-group">
            	<label for="total">Total</label>
            	<input type="number" name="total"  required value="{{old('total')}}" class="form-control">
            </div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<button class="btn btn-dark" type="submit">Guardar</button>
            	<a class="btn btn-dark" href="{{ url('/facturacion') }}" >Cancelar</a>
            </div>
		</div>

	</div>
			{!!Form::close()!!}		
@endsection