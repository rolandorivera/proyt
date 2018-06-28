<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-info-{{$emp->id}}">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header" style="background-color:#e9eaf4;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-times"></i></span>
        </button>
        <h4 class="modal-title">Informacion del Empleado</h4>
      </div>


      {!! Form::open(['route' => ['empleados.show',$emp->id],'method' => 'DELETE']) !!}


      <div class="modal-body">


        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
              <div class="form-group">
                {{Form::label('name','Nombre')}}
                {{Form::text('name',$emp->name,['class'=>'form-control','id'=>'name','placeholder'=>'Nombre del empleado','disabled'=>'', 'required'=>'','autocomplete'=>'off','autofocus'=>''])}}
                @if($errors->has('name'))
                  <div>
                    <ul>
                      @foreach ($errors->get('name') as $error)
                        <li>{{ $error }}</li>
                        <?php
                        echo "<script language='javascript'>";
                        echo "document.getElementById('name').style.borderColor='#C30000';";
                        echo "</script>";
                        ?>
                      @endforeach
                    </ul>
                  </div>
                @endif
              </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
              <div class="form-group">
                {{Form::label('lastName','Apellido')}}
                {{Form::text('lastName',$emp->lastName,['class'=>'form-control','id'=>'lastName', 'placeholder'=>'Nombre del empleado', 'disabled'=>'' ,'required'=>'','autocomplete'=>'off','autofocus'=>''])}}
                @if($errors->has('lastName'))
                  <div>
                    <ul>
                      @foreach ($errors->get('lastName') as $error)
                        <li>{{ $error }}</li>
                        <?php
                        echo "<script language='javascript'>";
                        echo "document.getElementById('lastName').style.borderColor='#C30000';";
                        echo "</script>";
                        ?>
                      @endforeach
                    </ul>
                  </div>
                @endif
              </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
              {!! Form::label('admission', 'Fecha de Registro')!!}
              {!! Form::date('admission', $emp->admission,['class'=>'form-control', 'id'=>'admission',  'disabled'=>'',  'placeholder'=>'Fecha de Registro del empleado','required'])!!}
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


            @php
              $position=DB::table('employees')->where('id',$emp->id)->get();
            @endphp
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
              <div class="form-group">
                <label for="position">Cargo</label>
                <select class="form-control" name="position" id="position" required disabled>
                  @foreach ($position as $po)
                    <option value="{{$po->id}}">{{$po->position}}</option>
                  @endforeach
                </select>
              </div>
            </div>


          </div>
          <div class="row">

                @php
                  $departmen=DB::table('departments')->where('id',$emp->department_id)->get();
                @endphp
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                  <div class="form-group">
                    <label for="department_id">Departamento</label>
                    <select class="form-control" name="department_id" id="department_id" required disabled>
                      @foreach ($departmen as $dep)
                        <option value="{{$dep->id}}">{{$dep->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                  <div class="form-group">
                    {{-- {{Form::label('afp','AFP')}}
                    {{Form::text('afp',null,['class'=>'form-control','id'=>'afp', 'placeholder'=>'AFP ############', 'required'=>'','autocomplete'=>'off','autofocus'=>''])}} --}}
                    <label for="afp">AFP</label>
                    <input type="text" value="{{$emp->afp}}" name="afp" id="afp" class="form-control" disabled placeholder="AFP" required autocomplete="off" autofocus data-inputmask="'mask': ['999999999999']">
                    @if($errors->has('lastName'))
                      <div>
                        <ul>
                          @foreach ($errors->get('afp') as $error)
                            <li>{{ $error }}</li>
                            <?php
                            echo "<script language='javascript'>";
                            echo "document.getElementById('afp').style.borderColor='#C30000';";
                            echo "</script>";
                            ?>
                          @endforeach
                        </ul>
                      </div>
                    @endif
                  </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                  <div class="form-group">
                    {{-- {{Form::label('isss','ISSS')}}
                    {{Form::text('isss',null,['class'=>'form-control','id'=>'isss', 'placeholder'=>'ISSS #########', 'required'=>'','autocomplete'=>'off','autofocus'=>''])}} --}}
                    <label for="isss">ISSS</label>
                    <input type="text" value="{{$emp->isss}}" name="isss" id="isss" class="form-control" placeholder="ISSS" disabled required autocomplete="off" autofocus data-inputmask="'mask': ['999999999']">
                    @if($errors->has('lastName'))
                      <div>
                        <ul>
                          @foreach ($errors->get('isss') as $error)
                            <li>{{ $error }}</li>
                            <?php
                            echo "<script language='javascript'>";
                            echo "document.getElementById('isss').style.borderColor='#C30000';";
                            echo "</script>";
                            ?>
                          @endforeach
                        </ul>
                      </div>
                    @endif
                  </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                  <div class="form-group">
                    {{-- {{Form::label('dui','DUI:')}}
                    {{Form::text('dui',null,['class'=>'form-control','id'=>'dui','pattern'=>"^[0-9]{8}[\-][0-9]{1}", 'placeholder'=>'Dui del empleado ########-#', 'required'=>'','autocomplete'=>'off','autofocus'=>''])}} --}}
                    <label for="dui">DUI</label>
                    <input type="text" value="{{$emp->dui}}" name="dui" id="dui" class="form-control" placeholder="DUI" disabled required autocomplete="off" autofocus data-inputmask="'mask': ['99999999-9']">
                    @if ($errors->has('dui'))
                      <div>
                        <ul>
                          @foreach ($errors->get('dui') as $error)
                            <li>{{ $error }}</li>
                            <?php
                            echo "<script language='javascript'>";
                            echo "document.getElementById('dui').style.borderColor='#C30000';";
                            echo "</script>";
                            ?>
                          @endforeach
                        </ul>
                      </div>
                    @endif
                  </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                  <div class="form-group">
                    {{-- {{Form::label('nit','NIT:')}}
                    {{Form::text('nit',null,['class'=>'form-control','id'=>'nit', 'pattern'=>"^[0-9]{4}[\-][0-9]{6}[\-][0-9]{3}[\-][0-9]{1}", 'placeholder'=>'Nit del empleado ####-######-###-#', 'autocomplete'=>'off','required'=>''])}} --}}
                    <label for="nit">NIT</label>
                    <input type="text" value="{{$emp->nit}}"name="nit" id="nit" class="form-control" placeholder="NIT" disabled required autocomplete="off" autofocus data-inputmask="'mask': ['9999-999999-999-9']">
                    @if($errors->has('nit'))
                      <div>
                        <ul>
                          @foreach ($errors->get('nit') as $error)
                            <li>{{ $error }}</li>
                            <?php
                            echo "<script language='javascript'>";
                            echo "document.getElementById('nit').style.borderColor='#C30000';";
                            echo "</script>";
                            ?>
                          @endforeach
                        </ul>
                      </div>
                    @endif
                  </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                  <div class="form-group">
                    {{Form::label('salary','Salario')}}
                    {{Form::text('salary',$emp->salary,['class'=>'form-control','id'=>'salary', 'placeholder'=>'Salario del empleado', 'disabled'=>'', 'required'=>'','autocomplete'=>'off','autofocus'=>''])}}
                    @if($errors->has('salary'))
                      <div>
                        <ul>
                          @foreach ($errors->get('salary') as $error)
                            <li>{{ $error }}</li>
                            <?php
                            echo "<script language='javascript'>";
                            echo "document.getElementById('salary').style.borderColor='#C30000';";
                            echo "</script>";
                            ?>
                          @endforeach
                        </ul>
                      </div>
                    @endif
                  </div>

                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                  <div class="form-group">
                  {{Form::label('photo','Imagen')}}
                  <img src="{{ asset( '/image/' . $emp->photo)}}" style ="height:90px" >
                </div>
                </div>

      </div>
      <div class="row">
      <div class="modal-footer">
        <button type="button" class="btn btn-success " data-dismiss="modal">Ver PDF</button>
        <button type="button" class="btn btn-danger " data-dismiss="modal">Cerrar</button>
      </div>
    </div>
      {{Form::Close()}}
    </div>
  </div>
</div>
