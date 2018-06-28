<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-create">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header" style="background-color:   #e9eaf4   ;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                </button>
                <h4 class="modal-title"> <i class="fa fa-plus-square-o"></i> Crear Factura</h4>
            </div>

            {!! Form::open(['route' => 'facturas.store', 'files' => true]) !!}
            <div class="modal-body">
              <div class="row">

                @php
                  $process=DB::table('processes')->get();
                @endphp
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                  <div class="form-group">
                    <label for="processes_id">Departamento/Unidad</label>
                    <select class="form-control" name="processes_id" id="processes_id" required >
                      @foreach ($process as $pro)

                        @php

                        $val = DB::table('bills')->where('num',$pro->id)->get();
                        $va = DB::table('bills')->where('num',$pro->id)->value('num');

                        @endphp
                        @if ($loop->first)
                          <option value="{{$pro->id}}">{{$pro->name}}</option>
                        @endif


                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="col-lg-6 col-sm62 col-md-6 col-xs-12">
                  <label for="providers_id">Proveedor</label>
                  <select class="form-control" name="providers_id" id="providers_id" required>
                    @foreach ($provider as $pro)
                      <option value="{{$pro->id}}">{{$pro->name}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                  {!! Form::label('admission', 'Fecha de Registro')!!}
                  {!! Form::date('admission', \Carbon\Carbon::now(),['class'=>'form-control', 'id'=>'admission', 'placeholder'=>'Fecha de Registro del la factura','required'])!!}
                  @if($errors->has('admission'))
                    <div>
                      <ul>
                        @foreach ($errors->get('admission') as $error)
                          <li>{{ $error }}</li>
                          <?php
                          echo "<script language='javascript'>";
                          echo "document.getElementById('registrationDate').style.borderColor='#ff5f5f';";
                          echo "</script>";
                          ?>
                        @endforeach
                      </ul>
                    </div>
                  @endif
                </div>

                </div>

                <div class="row">

                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                  <div class="form-group">
                    {{ Form::label('numberBill','Numero de factura') }}
                    {{ Form::text('numberBill',null,['class'=>'form-control','id'=>'numberBill', 'placeholder'=>'Numero de Factura', 'required'=>'','autocomplete'=>'off','autofocus'=>'']) }}

                  </div>
                  @if($errors->has('numberBill'))
                    <div>
                      <ul>
                        @foreach ($errors->get('numberBill') as $error)
                          <li>{{ $error }}</li>
                          <?php
                          echo "<script language='javascript'>";
                          echo "document.getElementById('tot').style.borderColor='#ff5f5f';";
                          echo "</script>";
                          ?>
                        @endforeach
                      </ul>
                    </div>
                  @endif
                </div>

                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                  <div class="form-group">
                    {{ Form::label('tot','Monto total') }}
                    {{ Form::text('tot',null,['class'=>'form-control','id'=>'tot', 'placeholder'=>'Total', 'required'=>'','autocomplete'=>'off','autofocus'=>'']) }}

                  </div>
                  @if($errors->has('tot'))
                    <div>
                      <ul>
                        @foreach ($errors->get('tot') as $error)
                          <li>{{ $error }}</li>
                          <?php
                          echo "<script language='javascript'>";
                          echo "document.getElementById('tot').style.borderColor='#ff5f5f';";
                          echo "</script>";
                          ?>
                        @endforeach
                      </ul>
                    </div>
                  @endif
                </div>

                {{-- <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                  <div class="form-group">
                    {!! Form::label('pdf','Factura en PDF')!!}
                    {!! Form::file('pdf',null,['class'=>'form-control', 'placeholder'=>'PDF'])!!}
                    <div>
                      <ul>
                        @foreach ($errors->get('pdf') as $error)
                          <li>{{ $error }}</li> --}}
                          <?php
                          // echo "<script language='javascript'>";
                          // echo "document.getElementById('<pdf></pdf>').style.borderColor='#C30000';";
                          // echo "</script>";
                          ?>
                        {{-- @endforeach
                      </ul>
                    </div>
                  </div>
                </div> --}}

              </div>
            </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-danger " data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary ">Guardar</button>
              </div>
              {!!Form::close()!!}
            </div>
          </div>
        </div>
