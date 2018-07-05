<li class="{!! areActiveRoutes(['example.index'])  !!} ">
    <a href=" {!! route('example.index') !!} ">
        <i class="fa fa-home fa-fw"></i> <span>Principal</span>
        <span class="pull-right-container"></span>
    </a>
</li>

<!-- Menu administrador -->
@if(Route::has('adminUsuarios.index') && Auth::user()->rol->nivel <= 1)
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
            @includeIf('admin_login::templeta.menu.users.index')
        </ul>
    </li>

@endif



