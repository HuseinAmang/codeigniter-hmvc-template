<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>
						<?= lang('index_heading'); ?>
						<small><?= lang('index_subheading'); ?></small>
					</h1>
					<p><?= lang('index_description'); ?></p>
				</div>
				<div class="col-sm-6">
					<?= $breadcrumbs ?>
				</div>
			</div>
		</div>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div id="infoMessage"><?php echo $message; ?></div>
					<div class="card">
						<div class="card-header">
							<div class="row">
								<div class="col-md-8 col-xs-3">
									<?= anchor(site_url('users/add'), '<i class="fa fa-plus"></i> ' . lang('index_create_user_link'), 'class="btn btn-success btn-sm" data-tooltip="tooltip" data-placement="top" title="add user"'); ?>
									<?= anchor(site_url('users/group'), '<i class="fa fa-plus"></i> ' . lang('index_create_group_link'), 'class="btn btn-success btn-sm" data-tooltip="tooltip" data-placement="top" title="add group"'); ?>
								</div>
							</div>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<?php if ($users) : ?>
								<table id="data_account" class="table table-striped table-bordered nowrap">
									<thead>
										<tr>
											<th width="5%">#</th>
											<th><?php echo lang('index_fname_th'); ?></th>
											<th><?php echo lang('index_lname_th'); ?></th>
											<th><?php echo lang('index_email_th'); ?></th>
											<th><?php echo lang('index_identity_th'); ?></th>
											<th><?php echo lang('index_groups_th'); ?></th>
											<th><?php echo lang('index_status_th'); ?></th>
											<th><?php echo lang('index_action_th'); ?></th>
										</tr>
									</thead>
									<tbody>
										<?php $number = '1';
										foreach ($users as $user) : ?>
											<tr>
												<td><?= $number++; ?></td>
												<td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
												<td><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
												<td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
												<td><?php echo htmlspecialchars($user->username, ENT_QUOTES, 'UTF-8'); ?></td>
												<td>
													<?php foreach ($user->groups as $group) : ?>
														<?php echo anchor("users/group/" . $group->id, '<i class="fa fa-user"></i> ' . htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8'), 'class="label label-info"'); ?>
													<?php endforeach ?>
												</td>
												<td>
													<?php echo ($user->active) ? anchor("users/deactivate/" . $user->id, '<i class="fa fa-check"></i> ' . lang('index_active_link'), 'class="btn btn-success btn-sm"') : anchor("users/activate/" . $user->id, '<i class="fa fa-close"></i> ' . lang('index_inactive_link'), 'class="btn btn-warninf btn-sm"'); ?></td>
												<td>
													<?= anchor('users/' . $user->id, '<i class="fa fa-paste"></i> <span class="bold">Edit</span>', 'class="btn btn-warning btn-sm"') ?>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
									<tfoot>
										<tr>
											<th width="5%">#</th>
											<th><?php echo lang('index_fname_th'); ?></th>
											<th><?php echo lang('index_lname_th'); ?></th>
											<th><?php echo lang('index_email_th'); ?></th>
											<th><?php echo lang('index_identity_th'); ?></th>
											<th><?php echo lang('index_groups_th'); ?></th>
											<th><?php echo lang('index_status_th'); ?></th>
											<th><?php echo lang('index_action_th'); ?></th>
										</tr>
									</tfoot>
								</table>
							<?php else : ?>
								<div>
									<h1>Data Not Found</h1>
								</div>
							<?php endif; ?>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>