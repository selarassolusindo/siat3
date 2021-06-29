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
            <li class="treeview
            <?php
            switch ($this->uri->segment(1)) {
                case 't99_company':
                case 'auth':
                case 't00_customer':
                case 't01_shipper':
                case 't02_vendor':
                case 't03_lokasi':
                case 't04_armada':
                case 't05_satuan':
                case 't06_cost':
                case 't07_service':
                    echo 'active';
                    break;
            }
            ?>
            ">
                <a href="#">
                    <i class="fa fa-files-o"></i> <span>Master</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li <?php echo $this->uri->segment(1) == 't99_company' ? 'class="active"' : ''; ?>><a href="<?php echo site_url() ?>t99_company"><i class="fa fa-circle-o"></i> Company</a></li>
                    <li <?php echo $this->uri->segment(1) == 'auth' ? 'class="active"' : ''; ?>><a href="<?php echo site_url() ?>auth"><i class="fa fa-circle-o"></i> User</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Hak Akses</a></li>
                    <li <?php echo $this->uri->segment(1) == 't00_customer' ? 'class="active"' : ''; ?>><a href="<?php echo site_url() ?>t00_customer"><i class="fa fa-circle-o"></i> Customer</a></li>
                    <li <?php echo $this->uri->segment(1) == 't01_shipper' ? 'class="active"' : ''; ?>><a href="<?php echo site_url() ?>t01_shipper"><i class="fa fa-circle-o"></i> Shipper</a></li>
                    <li <?php echo $this->uri->segment(1) == 't02_vendor' ? 'class="active"' : ''; ?>><a href="<?php echo site_url() ?>t02_vendor"><i class="fa fa-circle-o"></i> Vendor</a></li>
                    <li <?php echo $this->uri->segment(1) == 't03_lokasi' ? 'class="active"' : ''; ?>><a href="<?php echo site_url() ?>t03_lokasi"><i class="fa fa-circle-o"></i> Lokasi</a></li>
                    <li <?php echo $this->uri->segment(1) == 't04_armada' ? 'class="active"' : ''; ?>><a href="<?php echo site_url() ?>t04_armada"><i class="fa fa-circle-o"></i> Armada</a></li>
                    <li <?php echo $this->uri->segment(1) == 't05_satuan' ? 'class="active"' : ''; ?>><a href="<?php echo site_url() ?>t05_satuan"><i class="fa fa-circle-o"></i> Satuan</a></li>
                    <li <?php echo $this->uri->segment(1) == 't06_cost' ? 'class="active"' : ''; ?>><a href="<?php echo site_url() ?>t06_cost"><i class="fa fa-circle-o"></i> Cost</a></li>
                    <li <?php echo $this->uri->segment(1) == 't07_service' ? 'class="active"' : ''; ?>><a href="<?php echo site_url() ?>t07_service"><i class="fa fa-circle-o"></i> Service</a></li>
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
