<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="administrator" class="brand-link">

        <span class="brand-text font-weight-light">Administrator</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('') ?>assets/backend/dist/img/user.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="administrator" class="d-block">Administrator</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
					 with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="<?= base_url('administrator') ?>" class="nav-link <?= active_nav('dashboard', $main_nav); ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview <?= active_open('yearName', $main_nav); ?>">
                    <a href="#" class="nav-link <?= active_nav('yearName', $main_nav); ?>">
                        <i class="far fa-calendar-plus nav-icon"></i>
                        <p>
                            Add Year Name
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('getYearData') ?>" class="nav-link <?= active_nav('yearName', $sub_nav); ?>">
                                <i class="fas fa-user-plus"></i>
                                <p>Create Year Name</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>