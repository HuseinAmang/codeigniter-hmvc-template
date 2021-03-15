<div class="login-box">
    <div class="login-logo">
        <b>Control</b>PANEL
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <div id="infoMessage"><?php echo $message; ?></div>
            <?php echo form_open("signin"); ?>
            <div class="input-group mb-3">
                <?php echo form_input($identity); ?>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <?php echo form_input($password); ?>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
                        <?php echo lang('login_remember_label', 'remember'); ?>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <?php echo form_submit('submit', lang('login_submit_btn'), $submit_btn); ?>
                </div>
                <!-- /.col -->
            </div>
            <?php echo form_close(); ?>
            
            <p class="mb-1">
                <a href="<?= site_url('forgot_password'); ?>">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a href="register.html" class="text-center">Register a new membership</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->