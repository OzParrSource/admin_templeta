<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                @isset(Auth::user()->img)
                    <img src="{!! url(Auth::user()->img)!!}" class="img-circle" alt="User Image">
                @endisset
            </div>
            <div class="pull-left info">
                @isset(Auth::user()->name)
                    <p>{!! Auth::user()->name !!}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                @endisset
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


            @includeIf('admin.ozPartials.menu')
            @includeIf('admin_blog::templeta.menu.blog.index')



        </ul>
    </section>
    <!-- /.sidebar -->
</aside>