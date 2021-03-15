<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>
						<?php echo lang('deactivate_heading'); ?>
						<small><?php echo sprintf(lang('deactivate_subheading'), $user->username); ?></small>
					</h1>
					<p><?= lang('deactivate_description'); ?></p>
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
				<div class="col-12">
					<div class="card card-warning">
						<div class="card-header with-border">
							<div class="card-title"><?php echo lang('deactivate_heading'); ?></div>
						</div>
						<?php echo form_open("auth/deactivate/" . $user->id); ?>
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>
											<input type="radio" name="confirm" class="flat-yellow" value="yes" checked="checked" />
											<?php echo lang('deactivate_confirm_y_label', 'confirm'); ?>
										</label>
										<label>
											<input type="radio" name="confirm" class="flat-yellow" value="no" />
											<?php echo lang('deactivate_confirm_n_label', 'confirm'); ?>
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<?php echo form_hidden($csrf); ?>
							<?php echo form_hidden(['id' => $user->id]); ?>
							<div class="row">
								<div class="col-sm-6">
									<div class="float-sm-left">
										<a href="<?= site_url('users'); ?>" class="btn btn-warning btn-sm"><i class="fa fa-chevron-left"></i> Back </a>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="float-sm-right">
										<?php echo form_submit('submit', lang('deactivate_submit_btn'), $submit_btn); ?>
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