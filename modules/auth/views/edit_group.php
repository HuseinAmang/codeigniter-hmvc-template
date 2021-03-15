<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>
						<?php echo lang('edit_group_heading'); ?>
						<small><?php echo lang('edit_group_subheading'); ?></small>
					</h1>
					<p><?= lang('edit_group_description'); ?></p>
				</div>
				<div class="col-sm-6">
					<?= $breadcrumbs ?>
				</div>
			</div>
		</div>
	</section>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card card-warning">
						<div class="card-header with-border">
							<div class="card-title"><?php echo lang('edit_group_heading'); ?></div>
							<div id="infoMessage"><?php echo $message; ?></div>
						</div>
						<?php echo form_open(current_url()); ?>
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<?php echo lang('edit_group_name_label', 'group_name'); ?> <br />
										<?php echo form_input($group_name); ?>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<?php echo lang('edit_group_desc_label', 'description'); ?> <br />
										<?php echo form_input($group_description); ?>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="row">
								<div class="col-sm-6">
									<div class="float-sm-left">
										<a href="<?= site_url('users'); ?>" class="btn btn-warning btn-sm"><i class="fa fa-chevron-left"></i> Back </a>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="float-sm-right">
										<?php echo form_submit('submit', lang('edit_group_submit_btn'), $submit_btn); ?>
									</div>
								</div>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>