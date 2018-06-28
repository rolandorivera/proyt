@extends('layouts.app')

@section('contenido')

    <div class="row">
      <div class="col-lg-12">
        <h2 class="col-xs-12">
            <i class="current fa fa-shopping-cart"></i>Lista de Proveedores
            <a href="" class="btn btn-lg btn-primary  pull-right" data-target="#modal-create" data-toggle="modal">
              <i class="fa fa-plus-circle"></i>
              Nuevo Proveedor
            </a>
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
               <th width="14%">
                  Nombre del Proveedor
               </th>
               <th width="40%">
                 Direccion
               </th>
               <th class="hidden-xs" width="14%">
                 Telefono
               </th>
               <th class="hidden-xs" width="14%">
                Acciones
              </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($provider as $pro)
                  <tr>
                    <td align="center">{{$pro->name}}</td>
                    <td align="center">{{$pro->address}}</td>
                    <td align="center">{{$pro->phone}}</td>

                    <td align="center">

                      <a href="" class="btn btn-sm btn-icon btn-info btn-rounded" title="Información" data-target="#modal-info-{{$pro->id}}" data-toggle="modal"><i class="fa fa-eye"></i></a>
                      <a href="" class="btn btn-sm btn-icon btn-success" title="Editar" data-target="#modal-edit-{{$pro->id}}" data-toggle="modal"><i class="fa fa-edit"></i></a>




                    </td>
                  </tr>
                  {{-- @include('empleados.modal') --}}
                  @include('proveedores.modalInfo')
                  @include('proveedores.edit')
                  @include('proveedores.create')
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- end DataTables Example -->

@endsection
