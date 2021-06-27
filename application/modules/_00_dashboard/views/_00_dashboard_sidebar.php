<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <!-- dashboard -->
            <li><a href="<?php echo site_url() ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

            <?php if ($this->ion_auth->logged_in()) { ?>

            <!-- master -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i> <span>Master</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url() ?>t99_company"><i class="fa fa-circle-o"></i> Company</a></li>
                    <li><a href="index.html"><i class="fa fa-circle-o"></i> User</a></li>
                    <li><a href="index2.html"><i class="fa fa-circle-o"></i> Hak Akses</a></li>
                </ul>
            </li>

            <!-- transaksi -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i> <span>Transaksi</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>
            </li>

            <!-- laporan -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i> <span>Laporan</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>
            </li>

            <?php }  // end if ($this->ion_auth->logged_in()) {  ?>

            <!-- login or logout -->
            <?php if ($this->session->userdata('user_id') != "") { ?>
            <li><a href="<?php echo site_url() ?>auth/logout"><i class="fa fa-circle-o text-red"></i> <span>Logout</span></a></li>
            <?php } else { ?>
            <li><a href="<?php echo site_url() ?>auth/login"><i class="fa fa-circle-o text-green"></i> <span>Login</span></a></li>
            <?php }?>
            <!-- /Login or logout -->

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
