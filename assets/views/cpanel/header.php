<!-- Main Header -->
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark text-sm">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
		<li class="nav-item d-none d-sm-inline-block">
			<a href="<?= base_url('dashboard') ?>" class="nav-link"><?= lang('menu-dashboard'); ?></a>
		</li>
	</ul>

	<ul class="navbar-nav ml-auto">
		<li class="nav-item dropdown lang-menu">
			<a class="nav-link" data-toggle="dropdown" href="#">
				<i class="flag-icon <?= $lang_idiom == 'english' ? 'flag-icon-us' : 'flag-icon-id'; ?>"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-right p-0">
				<a href="javascript:void(0)" onclick="switchLang('english')" class="dropdown-item <?= $lang_idiom == 'english' ? 'active' : ''; ?>">
					<i class="flag-icon flag-icon-us mr-2"></i> English
				</a>
				<a href="javascript:void(0)" onclick="switchLang('indonesian')" class="dropdown-item <?= $lang_idiom == 'indonesian' ? 'active' : ''; ?>">
					<i class="flag-icon flag-icon-id mr-2"></i> Indonesia
				</a>
			</div>
		</li>
		<li class="nav-item dropdown user-menu">
			<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
				<img src="<?= base_url('assets/dist/img/avatar/robot_0' . $group_id . '.png') ?>" class="user-image img-circle elevation-2" alt="User Image">
				<span class="d-none d-md-inline"><?= $firstName . ' ' . $lastName ?></span>
			</a>
			<ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
				<!-- User image -->
				<li class="user-header bg-gray">
					<img src="<?= base_url('assets/dist/img/avatar/robot_0' . $group_id . '.png') ?>" class="img-circle elevation-2" alt="User Image">
					<p><?= $firstName . ' ' . $lastName ?></p>
				</li>
				<!-- Menu Footer-->
				<li class="user-footer">
					<a href="<?= site_url('users/change_password'); ?>" class="btn btn-default btn-flat"><?= lang('menu-change-pass'); ?></a>
					<a href="<?= site_url('signout'); ?>" class="btn btn-default btn-flat float-right"><?= lang('menu-signout'); ?></a>
				</li>
			</ul>
		</li>
	</ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-navy elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link navbar-gray">
		<img src="<?= base_url('assets/dist/img/logo_icon/circle_96x96.png') ?>" alt="AMG-CMS Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">AMG APP</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item">
					<a href="<?= base_url('dashboard') ?>" class="nav-link active">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							<?= lang('menu-dashboard'); ?>
						</p>
					</a>
				</li>
				
				<?php if ($group_id == '1') : ?>
					<li class="nav-header"><?= lang('settings'); ?></li>
					<li class="nav-item has-treeview" id="menu-users">
						<a href="#" class="nav-link">
							<i class="nav-icon fa fa-users"></i>
							<p>
								<?= lang('menu-users'); ?>
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview" id="menu-users-child">
							<li class="nav-item">
								<a href="<?= site_url('users/group'); ?>" class="nav-link" id="menu-add-group">
									<i class="far fa-circle nav-icon text-success"></i>
									<p><?= lang('menu-add-group'); ?></p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?= site_url('users/add'); ?>" class="nav-link" id="menu-add-user">
									<i class="far fa-circle nav-icon text-success"></i>
									<p><?= lang('menu-add-user'); ?></p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?= site_url('users'); ?>" class="nav-link" id="menu-list-users">
									<i class="far fa-circle nav-icon text-primary"></i>
									<p><?= lang('menu-all-users'); ?></p>
								</a>
							</li>
						</ul>
					</li>
				<?php endif ?>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>