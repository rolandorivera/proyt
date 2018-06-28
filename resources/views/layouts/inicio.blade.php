<!DOCTYPE html>
<html>
  <head>
    <title>
      ASV-System
    </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <link href="{{asset('http://fonts.googleapis.com/css?family=Lato:100,300,400,700')}}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{asset('stylesheets/bootstrap.min.css')}}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{asset('stylesheets/font-awesome.min.css')}}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{asset('stylesheets/se7en-font.css')}}" media="all" rel="stylesheet" type="text/css" />
    {{-- <link href="{{asset('stylesheets/isotope.css')}}" media="all" rel="stylesheet" type="text/css" /> --}}
    <link href="{{asset('stylesheets/jquery.fancybox.css')}}')}}" media="all" rel="stylesheet" type="text/css" />
    {{-- <link href="{{asset('stylesheets/fullcalendar.css')}}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{asset('stylesheets/wizard.css')}}" media="all" rel="stylesheet" type="text/css" /> --}}
    <link href="{{asset('stylesheets/select2.css')}}" media="all" rel="stylesheet" type="text/css" />
    {{-- <link href="{{asset('stylesheets/morris.css')}}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{asset('stylesheets/datatables.css')}}" media="all" rel="stylesheet" type="text/css" /> --}}
    <link href="{{asset('stylesheets/datepicker.css')}}" media="all" rel="stylesheet" type="text/css" />
    {{-- <link href="{{asset('stylesheets/timepicker.css')}}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{asset('stylesheets/colorpicker.css')}}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{asset('stylesheets/bootstrap-switch.css')}}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{asset('stylesheets/bootstrap-editable.css')}}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{asset('stylesheets/daterange-picker.css')}}" media="all" rel="stylesheet" type="text/css" /> --}}
    {{-- <link href="{{asset('stylesheets/typeahead.css')}}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{asset('stylesheets/summernote.css')}}" media="all" rel="stylesheet" type="text/css" /> --}}
    {{-- <link href="{{asset('stylesheets/ladda-themeless.min.css')}}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{asset('stylesheets/social-buttons.css')}}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{asset('stylesheets/pygments.css')}}" media="all" rel="stylesheet" type="text/css" /> --}}
    <link href="{{asset('stylesheets/style.css')}}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{asset('stylesheets/color/green.css')}}" media="all" rel="alternate stylesheet" title="green-theme" type="text/css" />
    <link href="{{asset('stylesheets/color/orange.css')}}" media="all" rel="alternate stylesheet" title="orange-theme" type="text/css" />
    <link href="{{asset('stylesheets/color/magenta.css')}}" media="all" rel="alternate stylesheet" title="magenta-theme" type="text/css" />
    <link href="{{asset('stylesheets/color/gray.css')}}" media="all" rel="alternate stylesheet" title="gray-theme" type="text/css" />
    {{-- <link href="{{asset('stylesheets/jquery.fileupload-ui.css')}}" media="screen" rel="stylesheet" type="text/css" />
    <link href="{{asset('stylesheets/dropzone.css')}}" media="screen" rel="stylesheet" type="text/css" /> --}}
  </head>
  <body class="page-header-fixed bg-1">
    <div class="modal-shiftfix">
      <!-- Navigation -->
      <div class="navbar navbar-fixed-top scroll-hide">
        <div class="container-fluid top-bar">
          <div class="pull-right">
            <ul class="nav navbar-nav pull-right">
              <li class="dropdown notifications hidden-xs">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true" class="se7en-flag"></span>
                  <div class="sr-only">
                    Notifications
                  </div>
                  <p class="counter">
                    4
                  </p>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">
                    <div class="notifications label label-info">
                      New
                    </div>
                    <p>
                      New user added: Jane Smith
                    </p></a>

                  </li>
                  <li><a href="#">
                    <div class="notifications label label-info">
                      New
                    </div>
                    <p>
                      Sales targets available
                    </p></a>

                  </li>
                  <li><a href="#">
                    <div class="notifications label label-info">
                      New
                    </div>
                    <p>
                      New performance metric added
                    </p></a>

                  </li>
                  <li><a href="#">
                    <div class="notifications label label-info">
                      New

                    </div>
                    <p>
                      New growth data available
                    </p></a>

                  </li>
                </ul>
              </li>
              <li class="dropdown user hidden-xs"><a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <img width="34" height="34" src="images/avatar.png" />{{ Auth::user()->name }}<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">
                    <i class="fa fa-user"></i>Mi cuenta</a>
                  </li>
                  <li><a href="#">
                    <i class="fa fa-gear"></i>Configuración</a>
                  </li>
                  <li><a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                     <i class="fa fa-sign-out"></i>Cerrar sesión
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="style-selector">
            <div class="style-selector-container">
                Opciones de colores
              </h2>
              <ul class="color-options clearfix">
                <li>
                  <a class="blue" href="javascript:chooseStyle('none', 30)"></a>
                </li>
                <li>
                  <a class="green" href="javascript:chooseStyle('green-theme', 30)"></a>
                </li>
                <li>
                  <a class="orange" href="javascript:chooseStyle('orange-theme', 30)"></a>
                </li>
                <li>
                  <a class="magenta" href="javascript:chooseStyle('magenta-theme', 30)"></a>
                </li>
                <li>
                  <a class="gray" href="javascript:chooseStyle('gray-theme', 30)"></a>
                </li>
              </ul>
              <div class="style-toggle closed">
                <span aria-hidden="true" class="se7en-gear"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid main-nav clearfix">
          <div class="nav-collapse">
            <ul class="nav">
              <li>
                <a class="current" href="{{route('inicio')}}"><span aria-hidden="true" class="fa fa-home"></span>Inicio</a>
              </li>
              <li><a class="current" href="{{ route('empleados.index') }}">
                <span aria-hidden="true" class="fa fa-group"></span>
                Empleados</a>
              </li>
              <li><a class="current" href="{{ route('departamentos.index') }}">
                <span aria-hidden="true" class="fa fa-building-o"></span>
                Departamentos</a>
              </li>
              <li><a class="current" href="{{route('proveedores.index')}}">
                <span aria-hidden="true" class="fa fa-archive"></span>
                Proveedores</a>
              </li>
              <li class="dropdown"><a class="current" data-toggle="dropdown" href="#">
                <span aria-hidden="true" class="fa fa-file-text-o "></span>Facturas<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="{{route('facturas.index')}}">Control de Facturas</a>
                  </li>
                  <li>
                    <a href="{{route('uasi')}}">Facturas en U.A.C.I</a>
                  </li>
                  <li>
                    <a href="{{route('contabilidad')}}">Facturas en Contabilidad</a>
                  </li>
                  <li>
                    <a href="{{route('sindicatura')}}">Facturas en Sindicatura</a>
                  </li>
                  <li>
                    <a href="{{route('alcalde')}}">Facturas en Despacho Alcalde Municipal</a>
                  </li>
                  <li>
                    <a href="#">Facturas en Tesoreria</a>
                  </li>
                </ul>
              </li>
              <li><a class="current" href="#">
                <span aria-hidden="true" class="fa fa-folder-open-o"></span>
                Carpetas Tecnicas</a>
              </li>
              <li><a class="current" href="#">
                <span aria-hidden="true" class="fa fa-dropbox"></span>
                Activo Fijo</a>
              </li>
              <li class="dropdown"><a class="current" data-toggle="dropdown" href="#">
                <span aria-hidden="true" class="se7en-pages"></span>Reportes<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">
                    <p>
                      Reporte 1
                    </p></a>
                  </li>
                  <li>
                    <a href="#">Reporte 2</a>
                  </li>
                  <li><a href="#">
                  <p>
                      Reporte 3
                    </p></a>

                  </li>
                  <li><a href="#">
                    <p>
                      Reporte 4
                    </p></a>
                  </li>
                  <li>
                    <a href="login2.html">Reporte 5</a>
                  </li>
                  <li><a href="#">
                    <p>
                      Reporte 6
                    </p></a>

                  </li>

                </ul>
              </li>
              <li><a class="current" href="#">
                <span aria-hidden="true" class="fa fa-download"></span>
                Back up</a>
              </li>
              <li><a class="current" href="#">
                <span aria-hidden="true" class="fa fa-book"></span>
                Bitacora</a>
              </li>
            </ul>
          </div>

        </div>
      </div>
      <script src="{{asset('http://code.jquery.com/jquery-1.10.2.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('http://code.jquery.com/ui/1.10.3/jquery-ui.js')}}" type="text/javascript"></script>
      <script src="{{asset('javascripts/bootstrap.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('javascripts/raphael.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('javascripts/selectivizr-min.js')}}" type="text/javascript"></script>
      {{-- <script src="{{asset('javascripts/jquery.mousewheel.js')}}" type="text/javascript"></script> --}}
      {{-- <script src="{{asset('javascripts/jquery.vmap.min.js')}}" type="text/javascript"></script> --}}
      {{-- <script src="{{asset('javascripts/jquery.vmap.sampledata.js')}}" type="text/javascript"></script> --}}
      {{-- <script src="{{asset('javascripts/jquery.vmap.world.js')}}" type="text/javascript"></script> --}}
      <script src="{{asset('javascripts/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>
      {{-- <script src="{{asset('javascripts/fullcalendar.min.js')}}" type="text/javascript"></script> --}}
      {{-- <script src="{{asset('javascripts/gcal.js')}}" type="text/javascript"></script> --}}
      <script src="{{asset('javascripts/jquery.dataTables.min.js')}}" type="text/javascript"></script>
      {{-- <script src="{{asset('javascripts/datatable-editable.js')}}" type="text/javascript"></script> --}}
      {{-- <script src="{{asset('javascripts/jquery.easy-pie-chart.js')}}" type="text/javascript"></script> --}}
      {{-- <script src="{{asset('javascripts/excanvas.min.js')}}" type="text/javascript"></script> --}}
      {{-- <script src="{{asset('javascripts/jquery.isotope.min.js')}}" type="text/javascript"></script> --}}
      {{-- <script src="{{asset('javascripts/isotope_extras.js')}}" type="text/javascript"></script> --}}
      <script src="{{asset('javascripts/modernizr.custom.js')}}" type="text/javascript"></script>
      <script src="{{asset('javascripts/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
      <script src="{{asset('javascripts/select2.js')}}" type="text/javascript"></script>
      <script src="{{asset('javascripts/styleswitcher.js')}}" type="text/javascript"></script>
      <script src="{{asset('javascripts/wysiwyg.js')}}" type="text/javascript"></script>
      {{-- <script src="{{asset('javascripts/typeahead.js')}}" type="text/javascript"></script> --}}
      {{-- <script src="{{asset('javascripts/summernote.min.js')}}" type="text/javascript"></script> --}}
      <script src="{{asset('javascripts/jquery.inputmask.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('javascripts/jquery.validate.js')}}" type="text/javascript"></script>
      {{-- <script src="{{asset('javascripts/bootstrap-fileupload.js')}}" type="text/javascript"></script> --}}
      {{-- <script src="{{asset('javascripts/bootstrap-datepicker.js')}}" type="text/javascript"></script> --}}
      {{-- <script src="{{asset('javascripts/bootstrap-timepicker.js')}}" type="text/javascript"></script>
      <script src="{{asset('javascripts/bootstrap-colorpicker.js')}}" type="text/javascript"></script>
      <script src="{{asset('javascripts/bootstrap-switch.min.js')}}" type="text/javascript"></script> --}}
      {{-- <script src="{{asset('javascripts/typeahead.js')}}" type="text/javascript"></script> --}}
      {{-- <script src="{{asset('javascripts/spin.min.js')}}" type="text/javascript"></script> --}}
      <script src="{{asset('javascripts/ladda.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('javascripts/moment.js')}}" type="text/javascript"></script>
      <script src="{{asset('javascripts/mockjax.js')}}" type="text/javascript"></script>
      {{-- <script src="{{asset('javascripts/bootstrap-editable.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('javascripts/xeditable-demo-mock.js')}}" type="text/javascript"></script>
      <script src="{{asset('javascripts/xeditable-demo.js')}}" type="text/javascript"></script> --}}
      <script src="{{asset('javascripts/address.js')}}" type="text/javascript"></script>
      <script src="{{asset('javascripts/daterange-picker.js')}}" type="text/javascript"></script>
      <script src="{{asset('javascripts/date.js')}}" type="text/javascript"></script>
      <script src="{{asset('javascripts/morris.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('javascripts/skycons.js')}}" type="text/javascript"></script>
      <script src="{{asset('javascripts/fitvids.js')}}" type="text/javascript"></script>
      <script src="{{asset('javascripts/jquery.sparkline.min.js')}}" type="text/javascript"></script>
      {{-- <script src="{{asset('javascripts/dropzone.js')}}" type="text/javascript"></script> --}}
      <script src="{{asset('javascripts/main.js')}}" type="text/javascript"></script>
      <script src="{{asset('javascripts/respond.js')}}" type="text/javascript"></script>
     @yield('contenido')
    </div>

  </body>
</html>
