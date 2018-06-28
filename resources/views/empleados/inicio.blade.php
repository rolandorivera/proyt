@extends('layouts.app')

@section('contenido')
  @include('empleados.create')
  <div class="col-lg-12">
    <h2 class="col-xs-12">
      <i class="current fa fa-user"></i>   Lista de Empleados
      <a href="" class="btn btn-lg btn-primary  pull-right" data-target="#modal-create" data-toggle="modal">
        <i class="fa fa-plus-circle"></i>
        Nuevo Empleado
      </a>
    </h2>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="widget-container fluid-height">
        <div class="heading tabs">

          <ul class="nav nav-tabs pull-left" data-tabs="tabs" id="tabs">
            <li class="active">
              <a data-toggle="tab" href="#tab1"><i class="fa fa-check-square "></i><span>Activos</span></a>
            </li>
            <li>
              <a data-toggle="tab" href="#tab2"><i class="fa fa-minus-square "></i><span>Inactivos</span></a>
            </li>

          </ul>
        </div>
        <div class="tab-content padded" id="my-tab-content">
          <div class="tab-pane active" id="tab1">
            <div class="row">
              <div class="col-lg-12">
                <div class="widget-container fluid-height clearfix">
                  <div class="widget-content padded clearfix">
                    <table class="table table-bordered table-striped" id="dataTable1">
                      <thead>
                        <tr>
                         <th width="15%">
                            Nombre
                         </th>
                         <th width="15%">
                           Apellido
                         </th>
                         <th class="hidden-xs" width="12%">
                           DUI
                         </th>
                         <th class="hidden-xs" width="12%">
                           NIT
                         </th>
                         <th class="hidden-xs" width="12%">
                           AFP
                         </th>
                         <th class="hidden-xs" width="12%">
                           ISSS
                         </th>
                         <th class="hidden-xs" width="15">
                          Acciones
                        </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($employee as $emp)
                            <tr>
                              <td align="left">{{$emp->name}}</td>
                              <td align="left">{{$emp->lastName}}</td>
                              <td align="left">{{$emp->dui}}</td>
                              <td align="left">{{$emp->nit}}</td>
                              <td align="left">{{$emp->afp}}</td>
                              <td align="left">{{$emp->isss}}</td>
                              <td align="left">

                                @php
                                $users = DB::table('users')->where('employee_id',$emp->id)->get();
                                $us = DB::table('users')->where('employee_id',$emp->id)->value('employee_id');
                                @endphp

                                @include('empleados.edit')
                                @if($emp->status=='Activo')
                                  <a href="" class="btn btn-sm  btn-info " title="Información" data-target="#modal-info-{{$emp->id}}" data-toggle="modal"><i class="fa fa-eye"></i></a>
                                  <a href="" class="btn btn-sm  btn-success" title="Editar" data-target="#modal-edit-{{$emp->id}}" data-toggle="modal"><i class="fa fa-edit"></i></a>
                                  @if ($us==null)
                                    <a href="" class="btn btn-sm  btn-warning btn-rounded" title="Asignar Usuario" data-target="#modal-createUser-{{$emp->id}}" data-toggle="modal"><i class="fa fa-plus-square-o"></i></a>

                                  @else
                                    <a class="btn btn-sm btn-warning " title="Ya posee un usario" disabled><i class="fa fa-minus-square "></i></a>
                                  @endif
                                  <a href="#" class="btn btn-sm  btn-default" title="Reporte de Empleado"><i class="fa fa-thumb-tack"></i></a>
                                  <a href="" class="btn btn-sm btn-danger btn-rounded" title="Dar de baja" data-target="#modal-delete-{{$emp->id}}" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
                                @else
                                  <a href="{{ route('empleadoRestaurar',$emp->id) }}" class="btn btn-sm btn-icon btn-warning btn-rounded" title="Dar de alta"><i class="fa fa-sign-out"></i></a>
                                @endif
                              </td>
                            </tr>
                            @include('empleados.modal')
                            @include('empleados.modalInfo')
                            @include('usuarios.create')
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab2">
            <div class="row">
              <div class="col-lg-12">
                <div class="widget-container fluid-height clearfix">
                  <div class="widget-content padded clearfix">
                    <table class="table table-bordered table-striped" id="dataTable2">
                      <thead>
                        <tr>
                         <th width="15%">
                            Nombre
                         </th>
                         <th width="15%">
                           Apellido
                         </th>
                         <th class="hidden-xs" width="12%">
                           DUI
                         </th>
                         <th class="hidden-xs" width="12%">
                           NIT
                         </th>
                         <th class="hidden-xs" width="12%">
                           AFP
                         </th>
                         <th class="hidden-xs" width="12%">
                           ISSS
                         </th>
                         <th class="hidden-xs" width="15">
                          Acciones
                        </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($employeeI as $emp)
                            <tr>
                              <td align="left">{{$emp->name}}</td>
                              <td align="left">{{$emp->lastName}}</td>
                              <td align="left">{{$emp->dui}}</td>
                              <td align="left">{{$emp->nit}}</td>
                              <td align="left">{{$emp->afp}}</td>
                              <td align="left">{{$emp->isss}}</td>
                              <td align="left">
                                  <a href="{{ route('empleadoRestaurar',$emp->id) }}" class="btn btn-sm btn-icon btn-warning btn-rounded" title="Dar de alta"><i class="fa fa-sign-out"></i></a>
                              </td>
                            </tr>

                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

@endsection
