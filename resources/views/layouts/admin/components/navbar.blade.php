<header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>S</b>ENA</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>SENA</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">


        <button type="button" id="sidebarCollapse" data-toggle="push-menu" style="background-color:#222d32;" class="btn bar-button-pro header-drl-controller-btn navbar-btn">
            <i style="background-color: #ffffff;" class="far fa-align-justify"></i>
        </button>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->

                <!-- Notifications: style can be found in dropdown.less -->

                <!-- Tasks: style can be found in dropdown.less -->

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="img/user/{{ session('USER')->foto }}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ session('USER')->name_user }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="img/user/{{ session('USER')->foto }}" class="img-circle" alt="User Image">
<?php
$aMeses =[
'1'=>'Enero',
'2'=>'Febrero',
'3'=>'Marzo',
'4'=>'Abril',
'5'=>'Mayo',
'6'=>'Junio',
'7'=>'julio',
'8'=>'Agosto',
'9'=>'Septiembre',
'10'=>'Octubre',
'11'=>'Noviembre',
'12'=>'diciembre'
];


  $dia = date( 'd' , strtotime( session('USER')->created_at ) );
  $mes = abs( date( 'm' , strtotime( session('USER')->created_at ) ));
  $ano =  date( 'Y' , strtotime( session('USER')->created_at ) );
?>
                            <p>
                                {{ session('USER')->nom1.' '.session('USER')->ape1   }}
                                <small>Miembre desde {{ $dia.' de '.$aMeses[$mes].' '.$ano  }}</small>
                            </p>
                        </li>
                        <!-- Menu Body -->

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{route('modules.dashboard.perfil')}}" class="btn btn-default btn-flat">Mi perfil</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{route('login.logout')}}" class="btn btn-default btn-flat">Cerrar sesion</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
            </ul>
        </div>
    </nav>
</header>