@extends('layouts.app')

@section('contenido')

  @php
  $valor = DB::table('bills')->where('status','En proceso')->get();
  $val = DB::table('bills')->where('status','En proceso')->value('status');
  @endphp


  <div class="row">
    <div class="col-lg-12">
      <h2 class="col-xs-12">
        <i class="current fa fa-user"></i>   Listado de Proceso de Pago

          @if ($val==null)
            <a href="" class="btn btn-lg btn-primary  pull-right" data-target="#modal-create" data-toggle="modal">
              <i class="fa fa-plus-circle"></i>
              Agregar Proceso
            </a>
            @else
              <a href="" class="btn btn-lg btn-primary  pull-right"  title="Hay Facturas Activas" data-target="#modal-info" data-toggle="modal">
                <i class="fa fa-plus-circle"></i>
                Agregar Proceso
              </a>

          @endif

          @if ($val==null)
            <a href="" class="btn btn-lg btn-danger  pull-right"  data-target="#modal-info" data-toggle="modal">
              <i class="fa fa-minus-square"></i>
              Crear Nuevo Proceso
            </a>
            @else
              <a href="" class="btn btn-lg btn-danger  pull-right"  data-target="#modal-info" data-toggle="modal">
                <i class="fa fa-minus-square"></i>
                Crear Nuevo Proceso
              </a>

          @endif



      </h2>
      @include('procesos.modalInfo')
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
                  Orden a pasar
               </th>
               <th width="80%">
                 Unidad/Departamento
               </th>
               <th width="10%">
                Accion
               </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($process as $pro)
                  <tr>
                    <td align="left">{{$pro->id}}°</td>

                    <td align="left">{{$pro->name}}</td>
                    <td>Editar</td>
                  </tr>


              @endforeach
              @include('procesos.create')
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- end DataTables Example -->

@endsection
