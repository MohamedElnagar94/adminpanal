<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('/')}}/storage/admin/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ admin()->user()->username }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="@yield('Dashboard') treeview">
          <a href="#" class="manu_fix">
            <i class="fa fa-dashboard"></i> <span>{{ trans('Admin.Dashboard') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="@yield('Dashboard')"><a href="{{url('/admin')}}"><i class="fa fa-circle-o"></i> Dashboard </a></li>
            {{-- <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li> --}}
          </ul>
        </li>
        <li class="@yield('Control') treeview">
          <a href="#" class="manu_fix">
            <i class="fa fa-cog"></i>
            {{--  <i class="fa fa-pie-chart"></i>  --}}
            <span >Admin</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="@yield('Control')"><a href="{{route('control.index')}}"><i class="fa fa-shield"></i>Admin Control</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
