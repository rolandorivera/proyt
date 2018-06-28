@extends('layouts.app')

@section('contenido')

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Reporte Empleados</title>
    </head>
    <body>

      <p>Nombre: <strong>{{ $employee->name}}</strong></p>
      <p>Apellidos: <strong>{{ $employee->lastName}}</strong></p>
      <p>DUI: <strong>{{ $employee->dui}}</strong></p>
      <p>NIT: <strong>{{ $employee->nit}}</strong></p>
      <p>AFP: <strong>{{ $employee->afp}}</strong></p>
      <p>ISSS: <strong>{{ $employee->isss}}</strong></p>
      <p>Cargo: <strong>{{ $employee->position}}</strong></p>
      <p>Salario: <strong>{{ $employee->salary}}</strong></p>
      <p>Estado: <strong>{{ $employee->status}}</strong></p>
      <p>Imagen: <strong>{{ $employee->photo}}</strong></p>
      <img src="{{ asset( '/image/' . $employee->photo)}}" style ="height:90px" >

    </body>
  </html>

@endsection
