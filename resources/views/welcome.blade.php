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

      <div class="login-wrap" style="margin-top: 1%; margin-bottom: 1%;">
         <div class="login-html ">
             <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Iniciar Sesion</label>
             <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Bienvenido</label>
             <div class="login-form">
             <form method="post" action="{{ route('login.auth') }}">
                 @csrf
                 <div class="sign-in-htm">
                     <div class="group">
                         <label for="id_admin" class="label">Identificacion</label>
                         <input id="id_admin" type="text" name="id_admin" class="input">
                     </div>
                     <div class="group">
                         <label for="password" class="label">Password</label>
                         <input id="password" name="password" type="password" class="input" data-type="password">
                     </div>


                     <div class="group">
                         <input type="submit" class="button" value="Iniciar Sesion">
                     </div>
                 </div>
             </form>
             </div>
             </div>
         </div>
     </div>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap.min.js"></script>


<script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://adminlte.io/themes/AdminLTE/dist/js/adminlte.min.js"></script>

</html>