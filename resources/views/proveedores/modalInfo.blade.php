<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-info-{{$pro->id}}">
    {!! Form::open(['route' => ['proveedores.show',$pro->id],'method' => 'DELETE']) !!}
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fa fa-times"></i></span>
          </button>
          <h4 class="modal-title">Informacion del proveedor {{$pro->name}}</h4>
        </div>
        <div class="modal-body">


          <p>Nombre de persona natural o empresa: <strong>{{ $pro->name}}</strong></p>
          <p>Razon social de la empresa: <strong>{{ $pro->business}}</strong></p>
          <p>Direccion de la empresa: <strong>{{ $pro->address}}</strong></p>
          <p>Telefono: <strong>{{ $pro->phone}}</strong></p>
          <p>Correo: <strong>{{ $pro->email}}</strong></p>
          <p>Numero de renta: <strong>{{ $pro->numrent}}</strong></p>
          <p>DUI: <strong>{{ $pro->dui}}</strong></p>
          <p>NIT: <strong>{{ $pro->nit}}</strong></p>
          <p>Imagen: <strong>{{ $pro->photo}}</strong></p>
          <img src="{{ asset( '/image/' . $pro->photo)}}" style ="height:90px" >

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  {{Form::Close()}}
</div>
