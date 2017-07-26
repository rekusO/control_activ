<ul class="sidebar-menu">
    <li class="header"><H4>OPCIONES</H4></li>
    <li class="treeview">
        <a href="{!! route('persona.crear') !!}">
            <i class="fa fa-user"></i> <span>Trabajador</span>
        </a>

    </li>


    <li class="treeview">
        <a href="{!! route('distrito.crear') !!}">
            <i class="fa fa-home"></i> <span>Distrito</span>
        </a>
    </li>


    <li class="treeview">
        <a href="#">
            <i class="fa fa-cubes"></i> <span>ACTIVOS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">

            <li><a href="{!! route('activo.crear') !!}"><i class="fa fa-plus-square"></i>NUEVO ACTIVOS</a></li>
            <li><a href="{!! route('activo.compact') !!}"><i class="fa fa-truck"></i>CREAR COMPLEMENTOS</a></li>


        </ul>
    </li>


    <li class="treeview">
        <a href="#">
            <i class="fa fa-building-o"></i> <span>Salida de Activo</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{!! route('salidactivos.crear') !!}"><i class="fa fa-truck"></i>SALIDA DE ACTIVO</a></li>

        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-pencil"></i> <span>INVENTARIO</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-circle-o"></i>REGISTRO DE INVENTARIO</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i>SALIDA DE INVENTARIO</a></li>
        </ul>
    </li>
</ul>




