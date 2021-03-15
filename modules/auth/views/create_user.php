<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        <?= lang('create_user_heading'); ?>
                        <small><?= lang('create_user_subheading'); ?></small>
                    </h1>
                    <p><?= lang('create_user_description'); ?></p>
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
                    <div class="card card-success">
                        <div class="card-header with-border">
                            <h3 class="card-title"><?= lang('create_user_heading'); ?></h3>
                            <div id="infoMessage"><?php echo $message; ?></div>
                        </div>
                        <?php echo form_open("auth/create_user"); ?>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo lang('create_user_fname_label', 'first_name'); ?> <br />
                                        <?php echo form_input($first_name); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo lang('create_user_lname_label', 'last_name'); ?> <br />
                                        <?php echo form_input($last_name); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php if ($identity_column !== 'email') { ?>
                                            <?= lang('create_user_identity_label', 'identity'); ?>
                                            <?= form_input($identity); ?>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo lang('create_user_company_label', 'company'); ?> <br />
                                        <?php echo form_input($company); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo lang('create_user_email_label', 'email'); ?> <br />
                                        <?php echo form_input($email); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo lang('create_user_phone_label', 'phone'); ?> <br />
                                        <?php echo form_input($phone); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo lang('create_user_password_label', 'password'); ?> <br />
                                        <?php echo form_input($password); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo lang('create_user_password_confirm_label', 'password_confirm'); ?> <br />
                                        <?php echo form_input($password_confirm); ?>
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
                                        <?php echo form_submit('submit', lang('create_user_submit_btn'), $submit_btn); ?>
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