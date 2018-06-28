<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$emp->id}}">
    {!! Form::open(['route' => ['empleados.destroy',$emp->id],'method' => 'DELETE']) !!}
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-times"></i></span>
        </button>
        <h4 class="modal-title">Dar de baja</h4>
      </div>
      <div class="modal-body">
        <p>Confirme si desea dar de baja al empleado: <strong>{{ $emp->name}}</strong></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary btn-rounded">Confirmar</button>
      </div>
    </div>
  </div>
  {{Form::Close()}}
</div>
