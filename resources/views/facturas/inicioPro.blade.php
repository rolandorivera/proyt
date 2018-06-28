@extends('layouts.app')

@section('contenido')

    <div class="row">
      <div class="col-lg-12">
        <h2 class="col-xs-12">
            <i class="current fa fa-folder "></i>  Pago de Facturas
        </h2>
      </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="widget-container fluid-height clearfix">
        <div class="widget-content padded clearfix">
          <table class="table table-bordered table-striped" id="dataTable1">
            <thead>
              <tr>
               <th width="10%">
                  Codigo de Factura
               </th>
               <th width="10%">
                  Monto
               </th>
               <th class="hidden-xs" width="25%">
                 Proveedor
               </th>
               <th class="hidden-xs" width="25%">
                 Departamento/Unidad
               </th>
               <th class="hidden-xs" width="12%">
                 Estado
               </th>
               <th class="hidden-xs" width="15">
                Acciones
              </th>
              </tr>
            </thead>
            <tbody>
              @php
              $prov=DB::table('bills')->JOIN ('providers','bills.providers_id','=','providers.id')
                                      ->JOIN ('processes','bills.num','=','processes.id')
                                      ->select('providers.name','bills.id','bills.admission','bills.num','bills.status','bills.numberBill','bills.tot','bills.processes_id','processes.name as nomdepto')
                                      ->get();
              $cont=DB::table('processes')->count();
              @endphp
              @foreach ($prov as $po )
                  <tr>
                      <td align="left">{{$po->numberBill}}</td>
                      <td align="right">$ {{$po->tot}}</td>
                      <td align="left">{{$po->name}}</td>
                      <td align="left">{{$po->nomdepto}}</td>
                      <td align="left">
                      @if ($po->status=='En proceso')
                        <span class="label label-warning">En Proceso</span>
                      @elseif ($po->status=='Aprobada')
                        <span class="label label-success">Aprovada</span>
                      @elseif ($po->status=='Denegada')
                        <span class="label label-danger">Denegada</span>

                      @endif
                    </td>

                    <td align="left">
                      <a href="" class="btn btn-sm btn-icon btn-success" title="Editar" data-target="#modal-edit-{{$po->id}}" data-toggle="modal"><i class="fa fa-edit"></i></a>
                      @if ($po->status=='En proceso')
                        <a href="{{ route('aprobar',$po->id) }}" class="btn btn-sm btn-icon btn-primary btn-rounded" title="Aprobar Factura"><i class="fa fa-thumbs-up"></i></a>
                      @endif
                    </td>
                  </tr>
                    @include('facturas.create')
                    @include('facturas.edit')
                    @include('facturas.modal')
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
