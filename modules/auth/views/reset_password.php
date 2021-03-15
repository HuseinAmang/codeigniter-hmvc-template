<div class="login-box">
	<div class="login-logo">
		<b>Control</b>PANEL
	</div>
	<!-- /.login-logo -->
	<div class="card">
		<div class="card-body login-card-body">
			<p class="login-box-msg"><?php echo lang('reset_password_heading'); ?></p>
			<div id="infoMessage"><?php echo $message; ?></div>
			<?php echo form_open('reset_password/' . $code); ?>
			<div class="form-group has-feedback">
				<label for="new_password"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length); ?></label> <br />
				<div class="input-group mb-3">
					<?php echo form_input($new_password); ?>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group has-feedback">
				<?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm'); ?> <br />
				<div class="input-group mb-3">
					<?php echo form_input($new_password_confirm); ?>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<?php echo form_input($user_id); ?>
				<?php echo form_hidden($csrf); ?>
				<div class="col-8">
					<div class="float-sm-left">
						<a href="<?= site_url('signin'); ?>" class="btn btn-warning btn-sm"><i class="fa fa-chevron-left"></i> Back </a>
					</div>
				</div>
				<!-- /.col -->
				<div class="col-4">
					<div class="float-sm-right">
						<?php echo form_submit('submit', lang('reset_password_submit_btn'), $submit_btn); ?>
					</div>
				</div>
				<!-- /.col -->
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
	<!-- /.login-box-body -->
</div>
<!-- /.login-box -->