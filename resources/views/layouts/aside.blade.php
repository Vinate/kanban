@section("aside")
        <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <p>.</p>
            </div>
            <div class="pull-left info">
                <p>Suphisit Khaika</p>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li>
                <a href="/home">
                    <i class="glyphicon glyphicon-blackboard"></i> <span>List of Boards </span>
                    <small class="label pull-right bg-red"></small>
                </a>
            </li>

            <li>
                <a href="/board{{session()->get('Board')}}#/">
                    <i class="glyphicon glyphicon-blackboard"></i> <span>Board</span>
                    <small class="label pull-right bg-red"></small>
                </a>
            </li>
            <li>
                <a href="/member{{session()->get('Board')}}">
                    <i class="fa  fa-user"></i> <span>Member</span>
                    <small class="label pull-right bg-red"></small>
                </a>
            </li>
            <li>
                <a href="/showGantt{{session()->get('Board')}}">
                    <i class="fa  fa-bar-chart"></i> <span>Gantt</span>
                    <small class="label pull-right bg-red"></small>
                </a>
            </li>

            <li>
                <a href="/editBoard{{session()->get('Board')}}">
                    <i class="fa fa-cogs"></i> <span>Edit</span>
                </a>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
</div><!-- ./wrapper -->
@show