<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-createUser-{{$emp->id}}">
        <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-header" style="background-color:   #e9eaf4   ;">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true"><i class="fa fa-times"></i></span>
                  </button>
                  <h4 class="modal-title"> <i class="fa fa-plus-square-o"></i> Asignar Usuario a {{$emp->name}}</h4>
              </div>

                    {!! Form::model($emp, ['route' => ['usuarios.store',  $emp->id], 'files' => true, 'method' => 'POST']) !!}

                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        {{ Form::label('name','Nombre') }}
                        {{ Form::text('name',$emp->name.' '.$emp->lastName,['class'=>'form-control','id'=>'name', 'placeholder'=>'', 'readonly'=>"readonly", 'required'=>'','autocomplete'=>'off','autofocus'=>'']) }}
                    </div>
                    @if($errors->has('name'))
                    <div>
                        <ul>
                        @foreach ($errors->get('name') as $error)
                            <li>{{ $error }}</li>
                            <?php
                            echo "<script language='javascript'>";
                            echo "document.getElementById('name').style.borderColor='#ff5f5f';";
                            echo "</script>";
                            ?>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                </div>

                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        {{ Form::label('name_user','Nombre del usuario') }}
                        {{ Form::text('name_user',null,['class'=>'form-control','id'=>'name_user', 'placeholder'=>'Nombre del Usuario', 'autocomplete'=>'off','required'=>'']) }}
                    </div>
                    @if($errors->has('name_user'))
                    <div>
                        <ul>
                        @foreach ($errors->get('name_user') as $error)
                            <li>{{ $error }}</li>
                            <?php
                            echo "<script language='javascript'>";
                            echo "document.getElementById('name_user').style.borderColor='#ff5f5f';";
                            echo "</script>";
                            ?>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                </div>

                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        {{ Form::label('email','Correo del empleado') }}
                        {{ Form::email('email',null,['class'=>'form-control','id'=>'email', 'placeholder'=>'Correo electronico del empleado', 'required'=>'','autocomplete'=>'off','autofocus'=>'']) }}
                    </div>
                    @if($errors->has('email'))
                    <div>
                        <ul>
                        @foreach ($errors->get('email') as $error)
                            <li>{{ $error }}</li>
                            <?php
                            echo "<script language='javascript'>";
                            echo "document.getElementById('email').style.borderColor='#ff5f5f';";
                            echo "</script>";
                            ?>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                </div>

                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                    <div class="form-group">
                        {{ Form::label('password','Contraseña') }}
                        {{ Form::password('password',['class'=>'form-control','id'=>'password', 'placeholder'=>'Constraseña', 'required'=>'','autocomplete'=>'off','autofocus'=>'']) }}
                    </div>
                    @if($errors->has('password'))
                    <div>
                        <ul>
                        @foreach ($errors->get('password') as $error)
                            <li>{{ $error }}</li>
                            <?php
                            echo "<script language='javascript'>";
                            echo "document.getElementById('password').style.borderColor='#ff5f5f';";
                            echo "</script>";
                            ?>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                </div>

                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                    <div class="form-group">
                        {{ Form::label('confirmpassword','Confirmar') }}
                        {{ Form::password('confirmpassword',['class'=>'form-control','id'=>'confirmpassword', 'placeholder'=>'Confirme la Contraseña', 'required'=>'','autocomplete'=>'off','autofocus'=>'']) }}
                    </div>
                    @if($errors->has('confirmpassword'))
                    <div>
                        <ul>
                        @foreach ($errors->get('confirmpassword') as $error)
                            <li>{{ $error }}</li>
                            <?php
                            echo "<script language='javascript'>";
                            echo "document.getElementById('confirmpassword').style.borderColor='#ff5f5f';";
                            echo "</script>";
                            ?>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                </div>

                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        {{-- {{ Form::label('id_employee','') }} --}}
                        {{ Form::hidden('id_employee',$emp->id,['class'=>'form-control','id'=>'id_employee', 'placeholder'=>'', 'required'=>'','autocomplete'=>'off','autofocus'=>'']) }}
                    </div>
                    @if($errors->has('id_employee'))
                    <div>
                        <ul>
                        @foreach ($errors->get('id_employee') as $error)
                            <li>{{ $error }}</li>
                            <?php
                            echo "<script language='javascript'>";
                            echo "document.getElementById('id_employee').style.borderColor='#ff5f5f';";
                            echo "</script>";
                            ?>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
        {!! Form::close() !!}

        </div>
    </div>
</div>
