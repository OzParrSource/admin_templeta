<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{!! url(Auth::user()->img)!!}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{!! Auth::user()->name !!}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <!--
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
        </form>
        -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENÚ</li>

            <li class="{{ areActiveRoutes(['admin.index']) }}">
                <a href="{!! route('admin.index') !!}">
                    <i class="fa fa-home fa-fw"></i> <span>Principal</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>

            <!-- Menu administrador -->
            @if(Route::has('adminUsuarios.index') )
                @php
                    $usersActive = [
                        "adminUsuarios.index",
                        "adminUsuarios.create",
                        "adminUsuarios.update",
                        "adminUsuarios.destroy",
                        "adminUsuarios.edit",
                        "adminUsuarios.editPass",
                        "adminUsuarios.updatePass",

                        "roles.store",
                        "roles.create",
                        "roles.update",
                        "roles.edit",
                        "roles.destroy",
                    ];
                @endphp
            <li class="{{ areActiveRoutes($usersActive) }} treeview">
                <a href="#">
                    <i class="fa fa-cogs"></i> <span>Administrar</span>
                    <span class="pull-right-container"></span>
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @if(Route::has('adminUsuarios.index') )
                        @include('admin_login::templeta.menu.users.index')
                    @endif
                </ul>
            </li>
            @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>