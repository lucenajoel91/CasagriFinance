<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CasagriApp</title>
  
  <!-- {{ config('const.BASE_URL') }} -->
  <link rel="icon" href="{{ asset('logo.png') }}" type="image/x-icon"/> 
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="http://localhost/CasagriFinance/public/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/CasagriFinance/public/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="http://localhost/CasagriFinance/public/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/CasagriFinance/public/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="http://localhost/CasagriFinance/public/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="http://localhost/CasagriFinance/public/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="http://localhost/CasagriFinance/public/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="http://localhost/CasagriFinance/public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="http://localhost/CasagriFinance/public/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- DATATABLES -->
  <link rel="stylesheet" href="http://localhost/CasagriFinance/public/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/CasagriFinance/public/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <!-- FullCalendar -->
  <link rel="stylesheet" href="http://localhost/CasagriFinance/public/bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="http://localhost/CasagriFinance/public/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <!-- Custom CSS for Animations and Transitions -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <!-- AOS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

  <style>
    .carousel-item img {
      width: 100%;
      height: auto;
    }
    .navbar-brand img {
      height: 50px;
    }
    .navbar {
      margin-bottom: 30px;
    }
  </style>

</head>
<body class="hold-transition skin-green sidebar-mini sidebar-collapse">

<div class="wrapper">

@if(Auth::user())

  @include('modulos.cabecera')
  
  @if(auth()->user()->rol == "Administrador")
    @include('modulos.menu.admin')
  @elseif(auth()->user()->rol == "Analista")
    @include('modulos.menu.analist')
  @endif

  @yield('content')
  
@else

@yield('content_header')  
@yield('contenido')

@endif
</div>


<!-- jQuery 3 -->
<script src="http://localhost/CasagriFinance/public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="http://localhost/CasagriFinance/public/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="http://localhost/CasagriFinance/public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="http://localhost/CasagriFinance/public/bower_components/raphael/raphael.min.js"></script>
<script src="http://localhost/CasagriFinance/public/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="http://localhost/CasagriFinance/public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="http://localhost/CasagriFinance/public/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="http://localhost/CasagriFinance/public/bower_components/moment/min/moment.min.js"></script>
<script src="http://localhost/CasagriFinance/public/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="http://localhost/CasagriFinance/public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Slimscroll -->
<script src="http://localhost/CasagriFinance/public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="http://localhost/CasagriFinance/public/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/CasagriFinance/public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="http://localhost/CasagriFinance/public/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://localhost/CasagriFinance/public/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="http://localhost/CasagriFinance/public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="http://localhost/CasagriFinance/public/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
<script src="http://localhost/CasagriFinance/public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- FullCalendar -->
<script src="http://localhost/CasagriFinance/public/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="http://localhost/CasagriFinance/public/bower_components/fullcalendar/dist/locale/es.js"></script>
<script src="http://localhost/CasagriFinance/public/bower_components/moment/dist/moment.js"></script>

<script>
    AOS.init();
    $('.carousel').carousel({
      interval: 2000 // Cambia el valor para ajustar la velocidad del carrusel
    });
  </script>

<script>
  $(".table").DataTable(
    {
    "language": {

      "sSearch": "Buscar:",
      "sEmptyTable": "No hay datos en la Tabla",
      "sZeroRecords": "No se encontraron resultados",
      "sInfo": "Mostrando registros del _START_ al _END_ de un total _TOTAL_",
      "SInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
      "sInfoFiltered": "(filtrando de un total de _MAX_ registros)",
      "oPaginate": {
      
        "sFirst": "Primero", 
        "sLast": "Último", 
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
      },

      "sLoadingRecords": "Cargando...",
      "sLengthMenu": "Mostrar _MENU_ registros"
    }
  }

  );
</script>
<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('registrado')== 'Si')
  <script type="text/javascript">
    Swal.fire(
      'El Registro ha sido guardado',
      '',
      'succes'
    )
  </script>
@elseif(session('Eliminado')== 'Si')
  <script type="text/javascript">
    Swal.fire(
      'El Registro ha sido Eliminado',
      '',
      'succes'
    )
  </script> 
@elseif(session('Actualizado')== 'Si')
  <script type="text/javascript">
    Swal.fire(
      'El Registro ha sido Actualizado',
      '',
      'succes'
    )
  </script>  
@endif

<script type="text/javascript">
  $('.table').on('click', '.Eliminar',function(){

    var Did = $(this).attr('Did');

    Swal.fire(
      {
        title:'¿Seguro qué desea eliminar este Registro?',
        icon:'warning',
        showCancelButton: true,
        cancelButtonText: 'Cancelar',
        cancelButtonColor: '#dd4b39',
        confirmButtonText: 'Eliminar',
        confirmButtonColor: '#3085d6'
      }
    ).then((result)=> {
      if(result.isConfirmed){
        window.location = "Eliminar"+Did;
      }
    } ) 
  })
</script>

@php
    use Illuminate\Support\Str;
@endphp

@if(Str::contains(Route::currentRouteName(), 'Horario'))
<script type="text/javascript">
    var date = new Date();
    var d = date.getDate(),
        m = date.getMonth(),
        a = date.getFullYear();

    @if($hasSchedule)
        var scrollTime = "{{ $Horarios->first()->horaInicio }}";
        var minTime = "{{ $Horarios->first()->horaInicio }}";
        var maxTime = "{{ $Horarios->first()->horaFin }}";
    @else
        var scrollTime = "06:00:00";
        var minTime = "06:00:00";
        var maxTime = "18:00:00";
    @endif

    $('#calendario').fullCalendar({
        defaultView: 'agendaWeek',
        hiddenDays: [0],
        scrollTime: scrollTime,
        minTime: minTime,
        maxTime: maxTime,
       

        dayClick:function(date,jsEvent,view){
          
          $('#CrearHorario').modal();
        }

    });
</script>
@endif

@include('modulos.pie')

</body>
</html>
