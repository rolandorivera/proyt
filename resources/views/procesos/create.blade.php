<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-create">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header" style="background-color:   #e9eaf4   ;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                </button>
                <h4 class="modal-title"> <i class="fa fa-plus-square-o"></i> Crear Proceso de pago</h4>
            </div>

            {!! Form::open(['route' => 'procesos.store', 'files' => true]) !!}
            <div class="modal-body">
              <div class="row">
                    @php
                      $departmen=DB::table('departments')->get();
                    @endphp
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                      <div class="form-group">
                        <label for="name">Departamento</label>
                        <select class="form-control" name="name" id="name" required>
                          @foreach ($departmen as $dep)

                            @php
                            $val = DB::table('processes')->where('name',$dep->name)->get();
                            $va = DB::table('processes')->where('name',$dep->name)->value('name');

                            @endphp
                            @if ($va==null)
                              <option value="{{$dep->name}}">{{$dep->name}}</option>
                            @endif


                          @endforeach
                        </select>
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
