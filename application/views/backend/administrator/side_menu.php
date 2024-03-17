<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="#" target="_blank" class="brand-link">
		<img src="<?= base_url("") ?>assets/backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">www.yourwebsite.com</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url("") ?>assets/backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">Admin</a>
			</div>
		</div>

		<!-- SidebarSearch Form -->
		<div class="form-inline">
			<div class="input-group" data-widget="sidebar-search">
				<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-sidebar">
						<i class="fas fa-search fa-fw"></i>
					</button>
				</div>
			</div>
		</div>
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				<li class="nav-item <?= active_nav('dashboard', $main_nav); ?> ">
					<a class="nav-link <?= active_nav('dashboard', $main_nav); ?>" href="<?= base_url("administrator") ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link <?= active_nav('mainMenu', $main_nav); ?>">
						<i class="nav-icon fas fa-th"></i>
						<p>
							Products
							<i class="right fas fa-angle-left"></i>
							<span class="right badge badge-danger">Updated</span>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href=" " class="nav-link <?= active_nav('subMenu', $sub_nav); ?> ">
								<i class="far fa-circle nav-icon"></i>
								<p>Create Product</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item  ">
					<a href="#" class="nav-link  ">
						<i class="fa-solid nav-icon fa-user-pen"></i>
						<p>
							Profile
						</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>