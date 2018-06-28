<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-update-{{$po->id}}">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header" style="background-color:#e9eaf4;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-times"></i></span>
        </button>
        <h4 class="modal-title">Aprobar Factura</h4>
      </div>

      {!! Form::open(['route' => ['aprobar',$po->id],'files' => true, 'method' => 'PUT']) !!}
      <div class="modal-body">
        <p>Confirme si desea aprobar la factura: <strong>{{ $po->numberBill}}</strong></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-rounded" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary btn-rounded">Confirmar</button>
      </div>
    </div>
  </div>
  {{Form::Close()}}
</div>
