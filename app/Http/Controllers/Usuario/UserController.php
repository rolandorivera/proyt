<?php

namespace App\Http\Controllers\Usuario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Employee;

class UserController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function store(Request $request)
  {

    $user = new User;
    $user->name= $request->get('name_user');
    $user->email = $request->get('email');
    $user->password = $request->get('password');
    $user->employee_id = $request->get('id_employee');
    $user->save();

    return redirect()->route('empleados.index');
  }

  public function edit($id)
  {
    $employee = Employee::findOrFail($id);
    return view('usuarios.create',compact('employee'));
  }
}
