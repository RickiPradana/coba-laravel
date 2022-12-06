    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            {{-- <li class="active treeview"> --}}
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ url('/home') }}"><i class="fa fa-circle-o"></i> Dashboard</a></li>
                    {{-- <li><a href="#"><i class="fa fa-circle-o"></i> Dashboard v2</a></li> --}}
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Data</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/siswa') }}"><i class="fa fa-circle-o"></i> Siswa</a></li>
                    <li><a href="{{ url('/guru') }}"><i class="fa fa-circle-o"></i> Guru</a></li>
                    <li><a href="{{ url('/matpel') }}"><i class="fa fa-circle-o"></i> Matpel</a></li>
                    <li><a href="{{ url('/nilai') }}"><i class="fa fa-circle-o"></i> Nilai</a></li>
                    <li><a href="{{ url('/companies') }}"><i class="fa fa-circle-o"></i> Companies</a></li>
                </ul>
            </li>
        </ul>
        </section>
        <!-- /.sidebar -->
    </aside>