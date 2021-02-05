


<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Sena_Colombia_logo.svg/1045px-Sena_Colombia_logo.svg.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ session('USER')->nom1 }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Navegacion</li>



            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Usuario</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.create')}}"><i class="fa fa-circle-o"></i>Agregar Usuario</a></li>
                    <li><a href="{{route('admin.index')}}"><i class="fa fa-circle-o"></i>Modificar Usuario</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Instructor</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('instructor.create')}}"><i class="fa fa-circle-o"></i>Agregar Instructor</a></li>
                    <li><a href="{{route('instructor.index')}}"><i class="fa fa-circle-o"></i>Modificar Instructor</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Aprendiz</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('aprendiz.create')}}"><i class="fa fa-circle-o"></i>Agregar Aprendiz</a></li>
                    <li><a href="{{route('aprendiz.index')}}"><i class="fa fa-circle-o"></i>Modificar Aprendiz</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Ficha</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('ficha.create')}}"><i class="fa fa-circle-o"></i>Agregar Ficha</a></li>
                    <li><a href="{{route('ficha.index')}}"><i class="fa fa-circle-o"></i>Modificar Ficha</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Programa</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('programa.create')}}"><i class="fa fa-circle-o"></i>Agregar Programa</a></li>
                    <li><a href="{{route('programa.index')}}"><i class="fa fa-circle-o"></i>Modificar Programa</a></li>

                </ul>
            </li>

          


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>


<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>