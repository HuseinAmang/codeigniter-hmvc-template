<div class="login-box">
    <div class="login-logo">
        <b>Control</b>PANEL
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg"><?php echo lang('forgot_password_heading'); ?></p>
            <div id="infoMessage"><?php echo $message; ?></div>
            <?php echo form_open("forgot_password"); ?>
            <div class="form-group has-feedback">
                <?php echo (($type == 'email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label)); ?>
                <div class="input-group mb-3">
                <?php echo form_input($identity); ?>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="row">
                <div class="col-8">
                    <div class="float-sm-left">
                        <a href="<?= site_url('signin'); ?>" class="btn btn-warning btn-sm"><i class="fa fa-chevron-left"></i> Back </a>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <div class="float-sm-right">
                        <?php echo form_submit('submit', lang('forgot_password_submit_btn'), $submit_btn); ?>
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