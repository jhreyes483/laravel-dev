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

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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







<div class="container">
    <div class="row">
        <div class="col-md-11 mx-auto">





            <div class="table-responsive">
                <table id="example" class="table table-striped" >
                  
                    <tbody class="table-light">
                        <tr>
                            <th class="bg-primary text-white" >Numero de ficha</th>
                            <td>{{  $ficha->No_ficha  }}</td>
                        </tr>
                        <tr>
                            <th class="bg-primary text-white">Descripcion</th>
                            <td>{{ $ficha->descrip }}</td>
                        </tr>
                        <tr>
                            <th class="bg-primary text-white">Estado</th>
                            <td>{{ $est[$ficha->estado] }}</td>
                        </tr>
                        <tr>
                            <th class="bg-primary text-white">jornada</th>
                            <td>{{ $ficha->jornada['nom_jornada'] }}</td>
                        </tr>
                        <tr>
                            <th class="bg-primary text-white">Programa</th>
                            <td>{{ $ficha->programa['nomProg'] }}</td>
                        </tr>
                        <tr>
                            <th class="bg-primary text-white">Aprendiz</th>
                            <td>{{ $ficha->aprendiz['nom1'] }}</td>
                        </tr>
                        
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
                  lengthMenu: [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
    });
} 
);
</script>

<script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://adminlte.io/themes/AdminLTE/dist/js/adminlte.min.js"></script>

</html>


   