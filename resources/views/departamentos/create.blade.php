<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-create">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header" style="background-color:   #e9eaf4   ;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                </button>
                <h4 class="modal-title"> <i class="fa fa-plus-square-o"></i> Crear Departamento</h4>
            </div>

            {!! Form::open(['route' => 'departamentos.store', 'files' => true]) !!}
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                  <div class="form-group">
                    {{Form::label('name','Nombre')}}
                    {{Form::text('name',null,['class'=>'form-control','id'=>'name','placeholder'=>'Nombre del departamento', 'required'=>'','autocomplete'=>'off','autofocus'=>''])}}
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
                    {{Form::label('description','Descripcion')}}
                    {{Form::textarea('description',null,['class'=>'form-control','id'=>'description', 'placeholder'=>'Descripcion del Departamento/Unidad','autocomplete'=>'off','autofocus'=>''])}}
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
        </div>
