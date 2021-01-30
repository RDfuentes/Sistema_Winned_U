<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-delete-{{$cliente->id_cliente}}">
	{{Form::Open(array('action'=>array('ClientesController@destroy',$cliente->id_cliente),'method'=>'delete'))}}
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-body">
				<p>ELIMINAR EL CLIENTE</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">NO</button>
				<button type="submit" class="btn btn-danger">SI</button>
			</div>
		</div>
	</div>
	{{Form::Close()}}

</div>