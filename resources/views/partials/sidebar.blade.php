<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MENU PRINCIPAL</li>
            <!-- Optionally, you can add icons to the links -->
            {{--<li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Home</span></a></li>--}}
            {{--<li><a href="#"><i class='fa fa-link'></i> <span>Another Link</span></a></li>--}}
            {{--<li class="treeview">--}}
                {{--<a href="#"><i class='fa fa-link'></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="#">Link in level 2</a></li>--}}
                    {{--<li><a href="#">Link in level 2</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            <li class="active treeview">
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Panel de Control</span>
                </a>

            </li>
            <li class="treeview">
                <a href="{{ route('customers_show_path') }}">
                    <i class="fa fa-user"></i> <span>Clientes</span>
                </a>

            </li>
            <li class="treeview">
                <a href="ventas.html">
                    <i class="fa fa-shopping-cart"></i> <span>Ventas</span>
                </a>

            </li>
            <li class="treeview">
                <a href="agenda.html">
                    <i class="fa fa-calendar"></i> <span>Agenda</span>
                </a>

            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-search"></i>
                    <span>Consultas</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="precios.html"><i class="fa fa-circle-o"></i> Lista de precios</a></li>
                    <li><a href="vacunaciones.html"><i class="fa fa-circle-o"></i> Vacunaciones</a></li>
                    <li><a href="cobrar.html"><i class="fa fa-circle-o"></i> Cuentas por cobrar</a></li>
                    <li><a href="caja.html"><i class="fa fa-circle-o"></i> Caja</a></li>
                </ul>
            </li>
            <li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder-open"></i>
                    <span>Registros</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="especies.html"><i class="fa fa-circle-o"></i> Especies</a></li>
                    <li><a href="razas.html"><i class="fa fa-circle-o"></i> Razas</a></li>
                    <li><a href="pelajes.html"><i class="fa fa-circle-o"></i> Pelajes</a></li>
                    <li><a href="patologias.html"><i class="fa fa-circle-o"></i> Patologias</a></li>
                    <li><a href="tipos_atencion.html"><i class="fa fa-circle-o"></i> Tipos de atencion</a></li>
                    <li><a href="vacunas.html"><i class="fa fa-circle-o"></i> Vacunas</a></li>
                    <li><a href="analisis.html"><i class="fa fa-circle-o"></i> Analisis</a></li>
                    <li><a href="atributos.html"><i class="fa fa-circle-o"></i> Atributos de analisis</a></li>
                    <li><a href="colas.html"><i class="fa fa-circle-o"></i> Colas de atencion</a></li>
                    <li><a href="modelos.html"><i class="fa fa-circle-o"></i> Modelo de documentos</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cube"></i>
                    <span>Productos y Servicios</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="categorias.html"><i class="fa fa-circle-o"></i> Categorias</a></li>
                    <li><a href="productos.html"><i class="fa fa-circle-o"></i> Productos y Servicios</a></li>
                    <li><a href="compras.html"><i class="fa fa-circle-o"></i> Compras</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-money"></i>
                    <span>Finanzas</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> En Construccion</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
