@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        @include('backpack::inc.sidebar_user_panel')

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          {{-- <li class="header">{{ trans('backpack::base.administration') }}</li> --}}
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
              {{-- tasks --}}
              <li><a href="{{ route('crud.task.index') }}"><i class="fa fa-tasks"></i> <span>{{trans('backpack::sidebar.tasks')}}</span></a></li>
              {{-- task groups --}}
              <li><a href="{{ route('crud.task_group.index') }}"><i class="fa fa-object-ungroup"></i> <span>{{trans('backpack::sidebar.task_groups')}}</span></a></li>
              {{-- task statuses --}}
              <li><a href="{{ route('crud.task_status.index') }}"><i class="fa fa-list-ol"></i> <span>{{trans('backpack::sidebar.task_statuses')}}</span></a></li>
              <!-- Users, Roles Permissions -->
              <li class="treeview">
                  <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
                      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
                      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
                  </ul>
              </li>
          <!-- ======================================= -->
          {{-- <li class="header">Other menus</li> --}}
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
