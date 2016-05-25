<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('menus.backend.sidebar.general') }}</li>

            <!-- Optionally, you can add icons to the links -->
            <li class="{{ Active::pattern('admin/dashboard') }}">
                <a href="{!! route('admin.dashboard') !!}"><span>{{ trans('menus.backend.sidebar.dashboard') }}</span></a>
            </li>
            
			@permission('view-access-management')
            <li class="{{ Active::pattern('admin/eventsession') }} treeview">
                <a href="#">
                    <span>{{ trans('eventsession.backend.sidebar.title') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu {{ Active::pattern('admin/eventsession*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/eventsession*', 'display: block;') }}">
                    <li class="{{ Active::pattern('admin/eventsession/') }}">
                        <a href="{!! route('admin.eventsession.index') !!}"><span>{{ trans('eventsession.backend.sidebar.index') }}</span></a>
                    </li>
                    <li class="{{ Active::pattern('admin/eventsession/create') }}">
                        <a href="{!! route('admin.eventsession.create') !!}"><span>{{ trans('eventsession.backend.sidebar.create') }}</span></a>
                    </li>
                </ul>
            </li>
            @endauth
			
            <li class="{{ Active::pattern('admin/visit') }} treeview">
                <a href="#">
                    <span>{{ trans('visit.backend.sidebar.title') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu {{ Active::pattern('admin/visit*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/visit*', 'display: block;') }}">
                    <li class="{{ Active::pattern('admin/visit/') }}">
                        <a href="{!! route('admin.visit.index') !!}"><span>{{ trans('visit.backend.sidebar.index') }}</span></a>
                    </li>
                </ul>
            </li>
            @permission('view-access-management')
            <li class="{{ Active::pattern('admin/files') }} treeview">
                <a href="#">
                    <span>{{ trans('fileentity.backend.sidebar.title') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu {{ Active::pattern('admin/files*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/files*', 'display: block;') }}">
                    <li class="{{ Active::pattern('admin/files/') }}">
                        <a href="{!! route('admin.fileentity.index') !!}"><span>{{ trans('fileentity.backend.sidebar.index') }}</span></a>
                    </li>
                    <li class="{{ Active::pattern('admin/files/create') }}">
                        <a href="{!! route('admin.fileentity.create') !!}"><span>{{ trans('fileentity.backend.sidebar.create') }}</span></a>
                    </li>
                </ul>
            </li>
			@endauth
			
            @permission('view-access-management')
                <li class="{{ Active::pattern('admin/access/*') }}">
                    <a href="{!!url('admin/access/users')!!}"><span>{{ trans('menus.backend.access.title') }}</span></a>
                </li>
            @endauth

			@permission('view-access-management')
            <li class="{{ Active::pattern('admin/log-viewer*') }} treeview">
                <a href="#">
                    <span>{{ trans('menus.backend.log-viewer.main') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu {{ Active::pattern('admin/log-viewer*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/log-viewer*', 'display: block;') }}">
                    <li class="{{ Active::pattern('admin/log-viewer') }}">
                        <a href="{!! url('admin/log-viewer') !!}">{{ trans('menus.backend.log-viewer.dashboard') }}</a>
                    </li>
                    <li class="{{ Active::pattern('admin/log-viewer/logs') }}">
                        <a href="{!! url('admin/log-viewer/logs') !!}">{{ trans('menus.backend.log-viewer.logs') }}</a>
                    </li>
                </ul>
            </li>
            @endauth
			
            @permission('view-access-management')
                <li class="{{ Active::pattern('admin/hopper/*') }}">
                    <a href="{!!url('admin/hopper')!!}"><span>{{ trans('hopper.backend.sidebar.title') }}</span></a>
                </li>
            @endauth

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>