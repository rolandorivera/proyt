<?php

namespace App\Http\Controllers\Factura;

use Illuminate\Http\Request;
use App\Department;
use App\Provider;
use App\Bill;
use App\Http\Controllers\Controller;
use App\Http\Requests\BillStoreRequest;
use App\Http\Requests\BillUpdateRequest;
use DB;


class BillController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
      $bill = Bill::orderBy('id','ASC')->paginate(100);
      $provider = Provider::orderBy('id','ASC')->paginate(100);
      return view('facturas.inicio', compact('bill','provider'));
  }
  public function create()
  {
    $departmen=Department::orderBy('id','DESC')->paginate(100);
    $provider=Provider::orderBy('id','DESC')->paginate(100);
    return view('facturas.create', compact('departmen','provider'));
  }

  public function store(BillStoreRequest $request)
  {
    $bill = new Bill;
    $bill->numberBill = $request->get('numberBill');
    $bill->tot = $request->get('tot');
    $bill->num = 01;
    $bill->providers_id = $request->get('providers_id');
    $bill->processes_id = $request->get('processes_id');
    $bill->admission = $request->get('admission');
    $bill->status = 'En proceso';

    $bill->pdf = '';
    $bill->save();
    return redirect()->route('facturas.index');

  }
  public function edit($id)
  {
    $bill = Bill::findOrFail($id);
    $provider = Provider::orderBy('id','DESC')->paginate(100);
    return view('facturas.edit',compact('bill','provider'));
  }
  public function update(BillUpdateRequest $request, $id)
  {
    $bill = Bill::findOrFail($id);
    $bill->fill($request->all())->update();
    $bill->update();
    return redirect()->route('facturas.index');
  }

  public function aprobar($id)
  {
    // DB::table('bills')->increment('processes_id')->where('id',$id)->get();
    $provider = Provider::orderBy('id','ASC')->paginate(100);
    $cont=DB::table('processes')->count();
    $bill = Bill::findOrFail($id);
    $bill->num=$bill->num + 1;
    if ($bill->num==$cont) {
      $bill->status= 'Aprobada';
    }
    $bill->update();
    return redirect()->route('indexPro');
  }

  public function index1()
  {
      $bill = Bill::orderBy('id','ASC')->paginate(100);
      $provider = Provider::orderBy('id','ASC')->paginate(100);
      return view('facturas.inicioPro', compact('bill','provider'));
  }

}
