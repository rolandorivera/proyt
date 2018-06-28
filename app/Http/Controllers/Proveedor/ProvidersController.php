<?php

namespace App\Http\Controllers\Proveedor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ProviderStoreRequest;
use App\Http\Requests\ProviderUpdateRequest;
use App\Provider;
USE BD;

class ProvidersController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
      $provider = Provider::orderBy('id','DESC')->paginate(100);
      return view('proveedores.inicio', compact('provider'));
  }

  public function create()
  {
    return view('proveedores.create');
  }

  public function store(ProviderStoreRequest $request)
  {
    $provider = new Provider;
    $provider->name =       $request->get('name');
    $provider->business  = $request->get('business  ');
    $provider->address =    $request->get('address');
    $provider->phone =      $request->get('phone');
    $provider->email= $request->get('email');
    $provider->numrent= $request->get('numrent');
    $provider->dui= $request->get('dui');
    $provider->nit= $request->get('nit');
    if (Input::hasFile('photo')){
      $file=Input::file('photo');
      $file->move(public_path().'/image',$file->getClientOriginalName());
      $provider->photo=$file->getClientOriginalName();
    }
    if (Input::hasFile('pdf')){
      $pdf=Input::file('pdf');
      $pdf->move(public_path().'/pdf',$file->getClientOriginalName());
      $provider->pdf=$pdf->getClientOriginalName();
    }
    $provider->save();
    return redirect()->route('proveedores.index');
  }

  public function show($id)
  {
    $provider = Provider::findOrFail($id);
    return view('proveedores.modalInfo' ,compact('provider'));
  }

  public function edit($id)
  {
    $provider = Provider::findOrFail($id);
    return view('proveedores.edit',compact('provider'));
  }

  public function update(Request $request, $id)
  {
    $provider = Provider::findOrFail($id);
    $provider->fill($request->all())->update();
    if (Input::hasFile('photo')){
      $file=Input::file('photo');
      $file->move(public_path().'/image',$file->getClientOriginalName());
      $provider->photo=$file->getClientOriginalName();
    }
    $provider->update();
    return redirect()->route('proveedores.index');
  }

  public function destroy( )
  {

  }

  public function restore()
  {

  }

}
