<?php

namespace App\Http\Controllers\Empleado;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employee;
use App\Department;
use App\Http\Requests\EmployeeStoreRequest;
use App\Http\Requests\EmployeeUpdateRequest;
use Illuminate\Support\Facades\Input;
USE BD;

class EmployeeController extends Controller
{

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
        $employee = Employee::orderBy('id','DESC')->where('status','Activo')->paginate(100);
        $employeeI = Employee::orderBy('id','DESC')->where('status','Inactivo')->paginate(100);
        return view('empleados.inicio', compact('employee','employeeI'));
    }

    public function create()
    {

      return view('empleados.create');
    }

    public function store(EmployeeStoreRequest $request)
    {
      $employee = new Employee;
      $employee->dui = $request->get('dui');
      $employee->nit = $request->get('nit');
      $employee->name = $request->get('name');
      $employee->lastName = $request->get('lastName');
      $employee->salary = $request->get('salary');
      $employee->afp = $request->get('afp');
      $employee->isss = $request->get('isss');
      $employee->admission = $request->get('admission');
      $employee->position = $request->get('position');
      $employee->department_id = $request->get('department_id');
      $employee->status = 'Activo';
      if (Input::hasFile('photo')){
        $file=Input::file('photo');
        $file->move(public_path().'/image',$file->getClientOriginalName());
        $employee->photo=$file->getClientOriginalName();
      }
      $employee->pdf= $request['input-file']->store('');
      $employee->save();
      return redirect()->route('empleados.index');
    }

    public function show($id)
    {
      $employee = Employee::findOrFail($id);
      return view('empleados.modalInfo' ,compact('employee'));
    }

    public function edit($id)
    {
      $employee = Employee::findOrFail($id);
        $departmen=Department::orderBy('id','DESC')->paginate(8);
      return view('empleados.edit',compact('employee','departmen'));
    }

    public function update(EmployeeUpdateRequest $request, $id)
    {
      $employee = Employee::findOrFail($id);
      $employee->fill($request->all())->update();
      if (Input::hasFile('photo')){
        $file=Input::file('photo');
        $file->move(public_path().'/image',$file->getClientOriginalName());
        $employee->photo=$file->getClientOriginalName();
      }
      $employee->update();
      return redirect()->route('empleados.index');
    }

    public function destroy( $id)
    {
      $employee = Employee::findOrFail($id);
      $employee->status = 'Inactivo';
      $employee->update();
      return redirect()->route('empleados.index');
    }
    
    public function restore($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->status = 'Activo';
        $employee->update();
        return redirect()->route('empleados.index');
    }

}
