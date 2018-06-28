<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-create">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header" style="background-color:   #e9eaf4   ;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                </button>
                <h4 class="modal-title"> <i class="fa fa-plus-square-o"></i> Crear Proveedor</h4>
            </div>

        {!! Form::open(['route' => 'proveedores.store', 'files' => true]) !!}

        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
              <div class="form-group">
                {{Form::label('name','Nombre persona natural o empresa')}}
                {{Form::text('name',null,['class'=>'form-control','id'=>'name','placeholder'=>'Nombre del proveedor', 'required'=>'','autocomplete'=>'off','autofocus'=>''])}}
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
                {{Form::label('business','Razon social de la empresa')}}
                {{Form::text('business',null,['class'=>'form-control','id'=>'business','placeholder'=>'Nombre del empleado','autocomplete'=>'off','autofocus'=>''])}}
                @if($errors->has('business'))
                  <div>
                    <ul>
                      @foreach ($errors->get('business') as $error)
                        <li>{{ $error }}</li>
                        <?php
                        echo "<script language='javascript'>";
                        echo "document.getElementById('business').style.borderColor='#C30000';";
                        echo "</script>";
                        ?>
                      @endforeach
                    </ul>
                  </div>
                @endif
              </div>
            </div>



            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
              <div class="form-group">
                <label for="phone">Telefono</label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Telefono" pattern="^[2|6|7][0-9]{3}[\-][0-9]{4}" required autocomplete="off" autofocus data-inputmask="'mask': ['9999-9999']">
                @if ($errors->has('phone'))
                  <div>
                    <ul>
                      @foreach ($errors->get('phone') as $error)
                        <li>{{ $error }}</li>
                        <?php
                        echo "<script language='javascript'>";
                          echo "document.getElementById('phone').style.borderColor='#C30000';";
                          echo "</script>";
                          ?>
                        @endforeach
                      </ul>
                    </div>
                  @endif
              </div>
            </div>

            <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
              <div class="form-group">
                {{ Form::label('email','Direccion de correo electronico') }}
                {{ Form::email('email',null,['class'=>'form-control','id'=>'email', 'placeholder'=>'nombre@servidor.com','autocomplete'=>'off','autofocus'=>'','required'=>'']) }}

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
            </div>

            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
              <div class="form-group">
                {{ Form::label('numrent','Numero de renta') }}
                {{ Form::text('numrent',null,['class'=>'form-control','id'=>'numrent', 'placeholder'=>'Numero de renta','autocomplete'=>'off','autofocus'=>'']) }}

                @if($errors->has('numrent'))
                  <div>
                    <ul>
                      @foreach ($errors->get('numrent') as $error)
                        <li>{{ $error }}</li>
                        <?php
                        echo "<script language='javascript'>";
                        echo "document.getElementById('numrent').style.borderColor='#ff5f5f';";
                        echo "</script>";
                        ?>
                      @endforeach
                    </ul>
                  </div>
                @endif
              </div>
            </div>

            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
              <div class="form-group">
                <label for="dui">DUI</label>
                <input type="text" name="dui" id="dui" class="form-control" placeholder="DUI" required autocomplete="off" autofocus data-inputmask="'mask': ['99999999-9']">
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

            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
              <div class="form-group">
                <label for="nit">NIT</label>
                <input type="text" name="nit" id="nit" class="form-control" placeholder="NIT" required autocomplete="off" autofocus data-inputmask="'mask': ['9999-999999-999-9']">
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
              </div>
              <div class="row">

                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                  <div class="form-group">
                    {{Form::label('address','Direccion de la empresa')}}
                    {{Form::text('address',null,['class'=>'form-control','id'=>'address', 'placeholder'=>'Direccion de la empresa', 'required'=>'','autocomplete'=>'off','autofocus'=>''])}}
                    @if($errors->has('address'))
                      <div>
                        <ul>
                          @foreach ($errors->get('address') as $error)
                            <li>{{ $error }}</li>
                            <?php
                            echo "<script language='javascript'>";
                            echo "document.getElementById('address').style.borderColor='#C30000';";
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
                    {!! Form::label('photo','Foto')!!}
                    {!! Form::file('photo',null,['class'=>'form-control', 'placeholder'=>'Seleccione una imagen'])!!}
                    <div>
                      <ul>
                        @foreach ($errors->get('photo') as $error)
                          <li>{{ $error }}</li>
                          <?php
                          echo "<script language='javascript'>";
                          echo "document.getElementById('<photo></photo>').style.borderColor='#C30000';";
                          echo "</script>";
                          ?>
                        @endforeach
                      </ul>
                    </div>
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
