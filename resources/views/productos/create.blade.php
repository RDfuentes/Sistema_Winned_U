@extends ('layouts.inicio')
@section ('contenido')

	<br><br>
	<div class="text-center">
		<div class="col-xs-12">
			<h3 class="text-center"><strong>INGRESAR NUEVO PRODUCTO</strong></h3><br>
		</div>
	</div>
			{!!Form::open(array('url'=>'productos','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}

	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<div class="form-group">
            	<label for="producto">Nombre del producto</label>
            	<input type="text" name="producto"  required value="{{old('producto')}}" class="form-control">
            </div>
		</div>
		<div class="col-lg-6 col-xs-12">
			<div class="form-group">
            	<label for="marca">Marca</label>
            	<input type="text" name="marca"  required value="{{old('marca')}}" class="form-control">
            </div>
		</div>
		<div class="col-lg-6 col-xs-12">
			<div class="form-group">
            	<label for="modelo">Modelo</label>
            	<input type="text" name="modelo"  required value="{{old('modelo')}}" class="form-control">
            </div>
		</div>
		<div class="col-lg-12 col-xs-12">
			<div class="form-group">
            	<label for="caracteristicas">Caracteristicas</label>
            	<input type="text" name="caracteristicas"  required value="{{old('caracteristicas')}}" class="form-control">
            </div>
		</div>
		<div class="col-lg-6  col-xs-12">
			<div class="form-group">
            	<label for=precio>Precio</label>
            	<input type="number" name="precio"  required value="{{old('precio')}}" class="form-control">
            </div>
		</div>
		<div class="col-lg-6 col-xs-12">
			<div class="form-group">
            	<label for=descuento>Existencias</label>
            	<input type="number" name="descuento"  required value="{{old('descuento')}}" class="form-control">
            </div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<button class="btn btn-dark" type="submit">Guardar</button>
            	<a class="btn btn-dark" href="{{ url('/productos') }}" >Cancelar</a>
            </div>
		</div>

	</div>
			{!!Form::close()!!}		
@endsection