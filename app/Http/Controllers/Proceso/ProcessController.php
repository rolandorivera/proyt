<?php

namespace App\Http\Controllers\Proceso;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
USE BD;
use App\Process;

class ProcessController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
      $process = Process::orderBy('id','ASC')->paginate(100);
      return view('procesos.inicio', compact('process'));
  }

  public function create()
  {

    return view('.create');
  }

  public function store(Request $request)
  {
    $process = new Process;
    $process->id= $request->get('id');
    $process->name= $request->get('name');

    $process->save();
    return redirect()->route('procesos.index');
  }
}
