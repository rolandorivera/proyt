@extends('layouts.app')

@section('contenido')

    <div class="row">
      <div class="col-lg-12">
        <h2 class="col-xs-12">
            <i class="current fa fa-bars"></i>   Lista de Departamentos
            <a href="" class="btn btn-lg btn-primary  pull-right" data-target="#modal-create" data-toggle="modal">
              <i class="fa fa-plus-circle"></i>
              Nuevo Departamento
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
                <th width="5%">
                   Codigo
                </th>
               <th width="25%">
                  Departamento/Unidad
               </th>
               <th width="30%">
                 Descripcion
               </th>
               <th width="25%">
                 Encargado
               </th>
               <th class="hidden-xs" width="15%">
                 Acciones
               </th>
              </tr>
            </thead>
            <tbody>

              @foreach ($depto as $dep)
                @php
                $depar=DB::table('departments')->JOIN('employees','departments.boss','=','employees.id')
                ->select('employees.name','employees.id')
                ->where('id',)
                ->get();
                @endphp
                @include('departamentos.boss')
                  <tr>
                    <td align="left">{{$dep->id}}</td>
                    <td align="left">{{$dep->name}}</td>
                    <td align="left">{{$dep->description}}</td>
                    <td align="left">

                      @if ($dep->boss==null)
                        No tiene Jefe
                      @else
                        @foreach ($depar as $d)
                          @if ($d->id==$dep->id)
                            {{$d->name}}

                          @endif

                        @endforeach

                      @endif
                  </td>
                    @include('departamentos.edit')
                    <td align="left">
                      <a href="" class="btn btn-sm btn-icon btn-success" title="Editar" data-target="#modal-edit-{{$dep->id}}" data-toggle="modal"><i class="fa fa-edit"></i></a>
                      @if ($depar==null||$dep->boss==null)
                        <a href="" class="btn btn-sm btn-icon btn-primary" title="Agregar Encargado" data-target="#modal-boss-{{$dep->id}}" data-toggle="modal"><i class="fa fa-user "></i></a>
                        @else
                          <a href="" class="btn btn-sm btn-icon btn-danger" title="Eliminar Encargado" data-target="#modal-delete-{{$dep->id}}" data-toggle="modal"><i class="fa fa-user "></i></a>

                      @endif


                    </td>
                  </tr>

                  @include('departamentos.bossD')
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      @include('departamentos.create')
    </div>
  </div>

@endsection
