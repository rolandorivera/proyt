<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-info-{{Auth::user()->id}}">
        <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-header" style="background-color:   #e9eaf4   ;">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true"><i class="fa fa-times"></i></span>
                  </button>
                  <h4 class="modal-title"> <i class="fa fa-plus-square-o"></i>  Usuario: {{Auth::user()->name}}</h4>
              </div>

                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        {{ Form::label('name_user','Nombre del usuario') }}
                        {{ Form::text('name_user',Auth::user()->name,['class'=>'form-control','id'=>'name_user', 'placeholder'=>'Nombre del Usuario', 'autocomplete'=>'off','required'=>'']) }}
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
                        {{ Form::email('email',Auth::user()->email,['class'=>'form-control','id'=>'email', 'placeholder'=>'Correo electronico del empleado', 'required'=>'','autocomplete'=>'off','autofocus'=>'']) }}
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



        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>


        </div>


        </div>
    </div>
</div>
