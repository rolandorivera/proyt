<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-boss-{{$dep->id}}">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header" style="background-color:   #e9eaf4   ;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                </button>
                <h4 class="modal-title"> <i class="fa fa-plus-square-o"></i> Asignar Jefe a: {{$dep->name}}</h4>
            </div>

              {!! Form::model($dep, ['route' => ['departamentos.update',  $dep->id], 'files' => true, 'method' => 'PUT']) !!}
            <div class="modal-body">
              <div class="row">

                @php
                  $employee=DB::table('employees')->where('department_id',$dep->id)->get();
                @endphp
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                  <div class="form-group">
                    <label for="boss">Empleados</label>
                    <select class="form-control" name="boss" id="boss" required>
                      @foreach ($employee as $em)
                        <option value="{{$em->id}}">{{$em->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                  <div class="form-group">
                    {{-- {{Form::label('name','Nombre')}} --}}
                    {{Form::hidden('name',$dep->name,['class'=>'form-control','id'=>'name','placeholder'=>'Nombre del departamento', 'required'=>'','autocomplete'=>'off','autofocus'=>''])}}
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

                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                  <div class="form-group">
                    {{-- {{Form::label('description','Descripcion')}} --}}
                    {{Form::hidden('description',$dep->description,['class'=>'form-control','id'=>'description', 'placeholder'=>'Descripcion del Departamento/Unidad','autocomplete'=>'off','autofocus'=>''])}}
                    @if($errors->has('description'))
                      <div>
                        <ul>
                          @foreach ($errors->get('description') as $error)
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
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger " data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary ">Guardar</button>
              </div>
              {!!Form::close()!!}
            </div>
          </div>
        </div>
