<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MODULOS</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{ route('usuarios.index') }}"><i class="fa fa-user"></i> <span>Usuarios</span></a></li>
        <li><a href="{{ route('calendario.index') }}"><i class="fa fa-calendar"></i> <span>Agenda</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-pie-chart"></i> <span>Reportes</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Citas</a></li>
            <li><a href="#">Usuarios</a></li>
          </ul>
        </li>
      </ul>