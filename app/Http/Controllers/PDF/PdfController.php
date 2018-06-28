<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Employee;
USE BD;
use PDF;

class PdfController extends Controller
{
    public function index($id)
    {
      $employee =Employee::findOrFail($id);
      return view('pdf.empleado', compact('employee'));

    }

    public function show($id)
    {
      $employee =Employee::findOrFail($id);

    }
}
