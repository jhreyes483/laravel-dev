<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css">

    <link rel="stylesheet" href="{{url('css/app.css')}}">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">


        <!-- sidebar -->
        @include('layouts.admin.components.sidebar')

        <!-- navbarbar -->
        @include('layouts.admin.components.navbar')


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content">
                <h3 style="padding: 15px; background-color: #0d6aad; color: #ffffff; margin-bottom: 5%;">BIENVENIDO - {{ session('USER')->name_user }} </h3>
               <div class="row">
                    <div class="col-md-3">
                        <a href="#" class="toggle btn btn-primary form-control"  style="margin-left: 3%; margin-bottom: 2%;">Filtros</a>
                    </div>
<div class="row">                
<div class="col-md-12 mx-auto">
<?php 
$mEstado =  (isset($_GET['estado']) ? ' -- <i class="far fa-comment-alt"></i> ---> Filtro por estado '.$est[$_GET['estado']]  :'');
$mJornada = (isset($_GET['jornada']) ? '-- <i class="far fa-comment-alt"></i> ---> Filto por jornada '. $jornada[$_GET['jornada']]->nom_jornada : '');
?>
<br><br> <?='    '.$mEstado .'  '.$mJornada?>
</div>
</div>



             </div>
                <div class="row">
                <div class=" container" style=" margin-bottom: 3%; margin-top: 2%;">
                    <div class="row my-2 form" style="display:none"   >
                        <div class="col-md-6">
                            <form action="">
                                <label for="estado">Estado</label>
                                <select name="estado" id="estado" onchange="submit(this)">
                                    <option value="0,1">Seleccione</option>
                                    @foreach($est as $i => $e )
                                    <?php  $get = ( $_GET['estado']?? '' )   ?>
                                    <option <?=    ( ( $get == $i )?  'selected ' : '' ) ?> value="{{ $i }}">{{ $e }}</option>
                                    @endforeach
                                </select>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form action="">
                                <label for="jornada">Jornada</label>
                                <select name="jornada" id="jornada" onchange="submit(this)">
                                    <option value="0,1">Seleccione</option>
                                    @foreach($jornada as $i => $j ) 
                                    <?php  $get = ( $_GET['jornada']?? '' )   ?>
                                    <option <?=    ( ( $get == $i )?  'selected ' : '' ) ?>   value="{{ $j->id }}">{{ $j->nom_jornada }}</option>
                                    @endforeach
                                </select>
                            </form>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>

            </div>


                <div class="container">
                    <div class="row">
                        <div class="col-md-11 mx-auto">





                            <div class="table-responsive">
                                <table id="example" class="table table-striped">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Numero de ficha</th>
                                            <th>Descripcion</th>
                                            <th>Estado</th>
                                            <th>Jornada</th>
                                            <th  >Programa</th>
                                            <th  >Accion de registro</th>

                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-light">
                                        @foreach($ficha as $ficha)
                                        <tr>
                                            <td>{{ $ficha->No_ficha }}</td>
                                            <td>{{ $ficha->descrip }}</td>
                                            <td>{{ $est[$ficha->estado] }}</td>
                                            <td>{{ $ficha->jornada['nom_jornada'] }}</td>
                                            <td>{{ $ficha->programa['nomProg'] }}</td>
                                            <td>
                                                <form action="" method="post">
                                                    <a href="{{ route('ficha.confirm',$ficha->id_ficha) }}" class="btn btn-sm btn-success" title="Actualizar estado"><i class="fas fa-clipboard-list"></i></a>
                                                    <a href="{{ route('ficha.edit',$ficha->id_ficha) }}" class="btn btn-sm btn-primary" title="Editar"><i class="fas fa-eye-dropper"></i></a>
                                                    <a href="{{ route('ficha.show',$ficha->id_ficha) }}" class="btn btn-sm btn-info" title="Detalle" ><i class="far fa-eye"></i></a>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>

        <!-- footer -->
        @include('layouts.admin.components.footer')
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            language: {
                processing: "Tratamiento en curso...",
                search: "Buscar&nbsp;:",
                lengthMenu: "Ordenar por _MENU_ ",
                info: "Mostrando _START_ al _END_ de un total de _TOTAL_",
                infoEmpty: "No existen datos.",
                infoFiltered: "(filtrado de _MAX_ elementos en total)",
                infoPostFix: "",
                loadingRecords: "Cargando...",
                zeroRecords: "No se encontraron datos con tu busqueda",
                emptyTable: "No hay datos disponibles en la tabla.",
                paginate: {
                    first: "Primero",
                    previous: "Anterior",
                    next: "Siguiente",
                    last: "Ultimo"
                },
                aria: {
                    sortAscending: ": active para ordenar la columna en orden ascendente",
                    sortDescending: ": active para ordenar la columna en orden descendente"
                }
            },
            scrollY: 400,
            lengthMenu: [
                [5, 25, 50, -1],
                [5, 25, 50, "All"]
            ]
        });
    });


$(document).ready(function() {
    var elemento = $(".form");
    var mostrar  = $(".toggle");
  mostrar.click(function() {
    elemento.toggle(1000);
  });
});



</script>

<script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://adminlte.io/themes/AdminLTE/dist/js/adminlte.min.js"></script>

</html>