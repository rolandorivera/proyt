<?php

namespace App\Http\Controllers\Departamento;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentStoreRequest;
use App\Http\Requests\DepartmentUpdateRequest;
use Illuminate\Support\Facades\Input;
use App\Department;
use DB;

class DepartmentController extends Controller
{
  public function __construct()
    {
       $this->middleware('auth');
    }
  public function index()
  {
      $depto = Department::orderBy('id','DESC')->paginate(100);
      return view('departamentos.inicio', compact('depto'));
  }

  public function create()
  {
    return view('departamentos.create');
  }

  public function store(DepartmentStoreRequest $request)
  {
    $depto = new Department;
    $depto->name = $request->get('name');
    $depto->description = $request->get('description');
    $depto->boss=null;
    $depto->save();
    return redirect()->route('departamentos.index');
  }

  public function show()
  {

  }

  public function edit($id)
  {
    $depto = Department::findOrFail($id);
    return view('departamentos.edit',compact('depto'));
  }

  public function update(DepartmentUpdateRequest $request, $id)
  {
    $depto = Department::findOrFail($id);
    $depto->fill($request->all())->update();
    $depto->update();
    return redirect()->route('departamentos.index');
  }

  public function destroy($id)
  {
    $depto = Department::findOrFail($id);
    $depto->boss = null;
    $depto->update();
    return redirect()->route('departamentos.index');
  }


}
